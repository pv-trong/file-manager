<?php

namespace App\Models;

use DateTime;

class Report extends Model
{
    protected string $table = 'reports';
    protected array $fields = ['id', 'pos', 'safe_drop', 'wet_stock', 'dry_stock', 'non_cash_payment', 'payout', 'total', 'created_at'];

    public function search($query): array
    {
        $conditions = '';
        if ($query['pos']) {
            $conditions .= "WHERE pos = '{$query['pos']}' ";
        }
        if ($query['date_from']) {
            $date_from = DateTime::createFromFormat('d/m/Y', $query['date_from'])->format('Y-m-d');
            $conditions .= $query['pos'] ? ' AND ' : 'WHERE ';
            $conditions .= " DATE(created_at) >= '{$date_from}' ";
        }
        if ($query['date_to']) {
            $conditions .= $query['date_from'] || $query['pos'] ? ' AND ' : 'WHERE ';
            $date_to = DateTime::createFromFormat('d/m/Y', $query['date_to'])->format('Y-m-d');
            $conditions .= " DATE(created_at) <= '{$date_to}'";
        }
        $query = $this->model->query("SELECT * FROM {$this->table} {$this->orderBy} {$conditions}");
        $records = [];
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $records[] = $row;
            }
        }
        $query->close();
        return $records;
    }
}