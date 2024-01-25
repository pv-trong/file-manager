<?php

namespace App\Models;

use DateTime;

class TankLevel extends Model
{
    protected string $table = 'tank_level';
    protected array $fields = ['id', 'date', 'time', 'premium95', 'premium97', 'diesel_bio', 'diesel_euro5'];
    protected string $created_column = 'date';

    function report()
    {
        $payload = [
            'day' => $_POST['day'] ?? '',
        ];
        $conditions = '';
        if ($payload['day']) {
            $date = DateTime::createFromFormat('d/m/Y', $payload['day'])->format('Y-m-d');
            $conditions .= "WHERE DATE(date) = '{$date}' ";
        }
        $query = "SELECT
        SUM(premium95) AS premium95,
        SUM(premium97) AS premium97,
        SUM(diesel_bio) AS diesel_bio,
        SUM(diesel_euro5) AS diesel_euro5,
        (SELECT time FROM {$this->table} {$conditions} LIMIT 1) AS time
        FROM {$this->table} {$conditions}";
        $result = $this->model->query($query);
        $premium95 = 0;
        $premium97 = 0;
        $diesel_bio = 0;
        $diesel_euro5 = 0;
        $time = '';
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $premium95 = $row["premium95"] ?? 0;
                $premium97 = $row['premium97'] ?? 0;
                $diesel_bio = $row['diesel_bio'] ?? 0;
                $diesel_euro5 = $row['diesel_euro5'] ?? 0;
                $time = $row['time'] ?? '--:--';
            }
        }
        return [
            'premium95' => $premium95,
            'premium97' => $premium97,
            'diesel_bio' => $diesel_bio,
            'diesel_euro5' => $diesel_euro5,
            'time' => $time
        ];
    }
}
