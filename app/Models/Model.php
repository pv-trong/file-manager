<?php

namespace App\Models;

use App\DB;
use DateTime;

abstract class Model
{
    protected $model;
    protected string $table = '';
    protected array $fields = [];
    protected array $hidden = [];
    protected string $select = '*';
    protected string $orderBy = '';
    protected string $created_column = 'created_at';
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
    public function destroy($id)
    {
        $sql = "DELETE FROM {$this->table} WHERE id = ?";
        if ($stmt = $this->model->prepare($sql)) {
            $stmt->bind_param("i", $id);
            if ($stmt->execute()) {
                $this->model->close();
                return true;
            }
        }
        $this->model->close();
        return false;
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
        if (isset($data[$this->created_column])) {
            $data[$this->created_column] = DateTime::createFromFormat('d/m/Y', $data[$this->created_column])->format('Y-m-d');
        } else {
            $data[$this->created_column] = date('Y-m-d H:i:s');
        }
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
        if (isset($data[$this->created_column])) {
            $data[$this->created_column] = DateTime::createFromFormat('d/m/Y', $data[$this->created_column])->format('Y-m-d');
        }
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

    public function count(): int
    {
        $stmt = $this->model->prepare("SELECT COUNT(*) AS allcount FROM {$this->table}");
        $stmt->execute();
        return $stmt->fetch();
    }

    public function getDatatable()
    {
        $row = $_POST['start'];
        $rowperpage = $_POST['length']; // Rows display per page
        $columnIndex = $_POST['order'][0]['column']; // Column index
        $columnName = $_POST['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
        $limit = '';
        $conditions = '';
        if ($row > 0) {
            $limit = "LIMIT {$row}, {$rowperpage}";
        }
        if ($_POST['date_from']) {
            $date_from = DateTime::createFromFormat('d/m/Y', $_POST['date_from'])->format('Y-m-d');
            $conditions .= "WHERE DATE({$this->created_column}) >= '{$date_from}' ";
        }
        if ($_POST['date_to']) {
            $conditions .= $_POST['date_from'] ? ' AND ' : 'WHERE ';
            $date_to = DateTime::createFromFormat('d/m/Y', $_POST['date_to'])->format('Y-m-d');
            $conditions .= " DATE({$this->created_column}) <= '{$date_to}'";
        }
        $query = $this->model->query("SELECT * FROM {$this->table} {$conditions} ORDER BY {$columnName} {$columnSortOrder} {$limit}");
        $records = [];
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $records[] = $row;
            }
        }
        $query->close();
        return $records;
    }

    function inserts($records)
    {
        if (empty($records)) {
            return false;
        }
        $columns = array_keys(reset($records));
        $sql = "INSERT INTO {$this->table} (" . implode(", ", $columns) . ") VALUES ";
        $valuesArr = [];
        foreach ($records as $row) {
            $valueList = [];
            foreach ($row as $value) {
                $valueList[] = "'" . $this->model->real_escape_string($value) . "'";
            }
            $valuesArr[] = "(" . implode(", ", $valueList) . ")";
        }
        $sql .= implode(", ", $valuesArr);
        if ($this->model->query($sql) === TRUE) {
            $this->model->close();
            return true;
        }
        $this->model->close();
        return false;
    }
}
