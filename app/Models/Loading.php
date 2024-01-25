<?php

namespace App\Models;

use DateTime;

class Loading extends Model
{
    protected string $table = 'loading';
    protected array $fields = ['id', 'date', 'premium95', 'premium97', 'diesel_bio', 'diesel_euro', 'created_at'];
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
        SUM(premium95) AS premium95,
        SUM(premium97) AS premium97,
        SUM(diesel_bio) AS diesel_bio,
        SUM(diesel_euro) AS diesel_euro,
        (SELECT date FROM {$this->table} {$conditions} LIMIT 1) AS date
        FROM {$this->table} {$conditions}";

        $result = $this->model->query($query);
        $premium95 = 0;
        $premium97 = 0;
        $diesel_bio = 0;
        $diesel_euro = 0;
        $date = '';
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $premium95 = $row["premium95"] ?? 0;
                $premium97 = $row['premium97'] ?? 0;
                $diesel_bio = $row['diesel_bio'] ?? 0;
                $diesel_euro = $row['diesel_euro'] ?? 0;
                $date = DateTime::createFromFormat('Y-m-d H:i:s', $row['date'] ?? date('Y-m-d H:i:s'))->format('d/m/Y') ?? '---';
            }
        }
        return [
            'premium95' => $premium95,
            'premium97' => $premium97,
            'diesel_bio' => $diesel_bio,
            'diesel_euro' => $diesel_euro,
            'date' => $date,
        ];
    }
}
