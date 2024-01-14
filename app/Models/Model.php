<?php

namespace App\Models;

use App\DB;

abstract class Model
{
    protected $model;
    protected string $table = '';
    protected array $fields = [];
    protected array $hidden = [];
    protected string $select = '*';
    protected string $orderBy = '';

    public function __construct()
    {
        $this->model = DB::getInstance();
        $field_select = array_filter($this->fields, function ($item) {
            return !in_array($item, $this->hidden);
        });
        $this->select = join(', ', $field_select);
    }

    public function findById($id): \stdClass|null
    {
        $query = $this->model->query("SELECT {$this->select} FROM {$this->table} WHERE id = {$id}");
        if ($query->num_rows > 0) {
            return $query->fetch_object();
        }
        $query->close();
        return null;
    }

    public function findBy($column, $value): \stdClass|null
    {
        $query = $this->model->query("SELECT {$this->select} FROM {$this->table} WHERE {$column} = '{$value}'");
        if ($query->num_rows > 0) {
            return $query->fetch_object();
        }
        $query->close();
        return null;
    }

    public function all(): array|null
    {
        $query = $this->model->query("SELECT {$this->select} FROM {$this->table} {$this->orderBy}");
        $records = [];
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $records[] = $row;
            }
        }
        $query->close();
        return $records;
    }

    public function select(array $select): static
    {
        $field_select = array_filter($select, function ($item) {
            return !in_array($item, $this->hidden);
        });
        $this->select = join(', ', $field_select);
        return $this;
    }

    public function orderBy($field, $sort = 'ASC'): static
    {
        $this->orderBy = "ORDER BY {$field} {$sort}";
        return $this;
    }

    public function insert(array $data): bool
    {
        $columns = implode(", ", array_keys($data));
        $placeholders = implode(", ", array_fill(0, count($data), '?'));
        $sql = "INSERT INTO {$this->table} ({$columns}) VALUES ({$placeholders})";
        $stmt = $this->model->prepare($sql);
        $types = str_repeat('s', count($data));
        $stmt->bind_param($types, ...array_values($data));

        if ($stmt->execute()) {
            $last_id = $stmt->insert_id;
            $stmt->close();
            $this->model->close();
            return true;
        }

        $stmt->close();
        $this->model->close();
        return false;
    }

    public function updateById($id, array $data): bool
    {
        $columns = '';
        foreach ($data as $key => $value) {
            $columns .= "{$key} = '{$value}', ";
        }
        $columns = rtrim($columns, ", ");
        $sql = "UPDATE {$this->table} SET {$columns} WHERE id = {$id}";
        $status = false;
        if ($this->model->query($sql) === TRUE) {
            $status = true;
        }
        $this->model->close();
        return $status;
    }
}