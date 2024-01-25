<?php

namespace App\Models;

use DateTime;

class DirectDebitAccount extends Model
{
    protected string $table = 'direct_debit_account';
    protected array $fields = ['id', 'date', 'amount', 'created_at'];
    protected string $created_column = 'created_at';

    function report()
    {
        $payload = [
            'day' => $_POST['day'] ?? '',
        ];
        $conditions = '';
        if ($payload['day']) {
            $date = DateTime::createFromFormat('d/m/Y', $payload['day'])->format('Y-m-d');
            $conditions .= "WHERE DATE(created_at) = '{$date}' ";
        }
        $query = "SELECT
        SUM(amount) AS amount,
        (SELECT date FROM {$this->table} {$conditions} LIMIT 1) AS date
        FROM {$this->table} {$conditions}";
        $result = $this->model->query($query);
        $amount = 0;
        $date = '';
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $amount = $row["amount"] ?? 0;
                $date = DateTime::createFromFormat('Y-m-d H:i:s', $row['date'] ?? date('Y-m-d H:i:s'))->format('d/m/Y') ?? '---';
            }
        }
        return [
            'amount' => $amount,
            'date' => $date,
        ];
    }
}
