<?php

namespace App\Models;

class DirectDebitAccount extends Model
{
    protected string $table = 'direct_debit_account';
    protected array $fields = ['id', 'date', 'amount'];
    protected string $created_column = 'date';
}
