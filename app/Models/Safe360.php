<?php

namespace App\Models;

class Safe360 extends Model
{
    protected string $table = 'safe360';
    protected array $fields = ['id', 'feul', 'dry_stock', 'total_cdm', 'coin_shortage', 'created_at'];
}
