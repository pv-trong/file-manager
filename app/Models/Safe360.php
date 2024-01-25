<?php

namespace App\Models;

use DateTime;

class Safe360 extends Model
{
    protected string $table = 'safe360';
    protected array $fields = ['id', 'feul', 'dry_stock', 'total_cdm', 'coin_shortage', 'created_at'];
    protected string $created_column = 'created_at';

    public function getTotalCDM()
    {
        $query = "SELECT
        SUM(total_cdm)
        AS total
        FROM {$this->table} ";

        $payload = [
            'date_from' => $_POST['date_from'] ?? '',
            'date_to' => $_POST['date_to'] ?? ''
        ];
        if ($payload['date_from']) {
            $date_from = DateTime::createFromFormat('d/m/Y', $payload['date_from'])->format('Y-m-d');
            $query .= "WHERE DATE(created_at) >= '{$date_from}' ";
        }
        if ($payload['date_to']) {
            $date_to = DateTime::createFromFormat('d/m/Y', $payload['date_to'])->format('Y-m-d');
            $query .= $payload['date_from'] ? ' AND ' : 'WHERE ';
            $query .= " DATE(created_at) <= '{$date_to}'";
        }
        $result = $this->model->query($query);
        $total = 0;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $total = $row["total"] ?? 0;
            }
        }
        return $total;
    }

    function report()
    {
        $query = "SELECT
        SUM(feul) AS feul,
        SUM(dry_stock) AS dry_stock,
        SUM(total_cdm) AS total_cdm,
        SUM(coin_shortage) AS coin_shortage
        FROM {$this->table} ";

        $payload = [
            'day' => $_POST['day'] ?? '',
        ];
        if ($payload['day']) {
            $date = DateTime::createFromFormat('d/m/Y', $payload['day'])->format('Y-m-d');
            $query .= "WHERE DATE(created_at) = '{$date}' ";
        }
        $result = $this->model->query($query);
        $feul = 0;
        $dry_stock = 0;
        $total_cdm = 0;
        $coin_shortage = 0;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $feul = $row["feul"] ?? 0;
                $dry_stock = $row['dry_stock'] ?? 0;
                $total_cdm = $row['total_cdm'] ?? 0;
                $coin_shortage = $row['coin_shortage'] ?? 0;
            }
        }
        return [
            'feul' => $feul,
            'dry_stock' => $dry_stock,
            'total_cdm' => $total_cdm,
            'coin_shortage' => $coin_shortage
        ];
    }
}
