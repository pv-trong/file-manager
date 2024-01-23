<?php

namespace App\Models;

class TankLevel extends Model
{
    protected string $table = 'tank_level';
    protected array $fields = ['id', 'date', 'premium95', 'premium97', 'diesel_bio', 'diesel_euro5'];
    protected string $created_column = 'date';
}