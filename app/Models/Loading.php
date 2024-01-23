<?php

namespace App\Models;

class Loading extends Model
{
    protected string $table = 'loading';
    protected array $fields = ['id', 'date', 'premium95', 'premium97', 'diesel_bio', 'diesel_euro'];
    protected string $created_column = 'date';
}