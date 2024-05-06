<?php

namespace App\Models;

class Slider extends Model
{
    protected string $table = 'sliders';
    protected array $fields = ['id', 'title', 'slider_key', 'description', 'images', 'created_at'];
    protected string $created_column = 'created_at';
}
