<?php

namespace App\Models;

use DateTime;

class Report extends Model
{
    protected string $table = 'reports';
    protected array $fields = ['id', 'pos', 'safe_drop', 'wet_stock', 'dry_stock', 'non_cash_payment', 'payout', 'total', 'created_at'];
    protected string $format_create = 'Y/m/d H:i:s';
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
        $query = $this->model->query("SELECT * FROM {$this->table} {$conditions} {$this->orderBy}");
        $records = [];
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $records[] = $row;
            }
        }
        $query->close();
        return $records;
    }

    public function getData()
    {
        $query = "SELECT
        SUM(wet_stock) - 
        SUM(
           JSON_EXTRACT(non_cash_payment, '$.\"e-wallet\"') + 
           JSON_EXTRACT(non_cash_payment, '$.\"credit-card\"') +
           JSON_EXTRACT(non_cash_payment, '$.\"voucher\"')
        ) 
        AS cash,
        SUM(dry_stock) -
        SUM(payout) 
        AS final
        FROM {$this->table} ";

        $payload = [
            'pos' => $_POST['pos'] ?? '',
            'date_from' => $_POST['date_from'] ?? '', 
            'date_to' => $_POST['date_to'] ?? ''
        ];
        if ($payload['pos']) {
            $query .= "WHERE pos = {$payload['pos']} ";
        }
        if ($payload['date_from']) {
            $date_from = DateTime::createFromFormat('d/m/Y', $payload['date_from'])->format('Y-m-d');
            $query .= $payload['pos'] ? ' AND ' : 'WHERE ';
            $query .= " DATE(created_at) >= '{$date_from}' ";
        }
        if ($payload['date_to']) {
            $date_to = DateTime::createFromFormat('d/m/Y', $payload['date_to'])->format('Y-m-d');
            $query .= $payload['date_from'] || $payload['pos'] ? ' AND ' : 'WHERE ';
            $query .= " DATE(created_at) <= '{$date_to}'";
        }
        // echo $query; die();
        $result = $this->model->query($query);
        $cash = 0;
        $final = 0;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $cash = $row["cash"] ?? 0;
                $final = $row['final'] ?? 0;
            }
        }
        return [$cash, $final];
    }
}
