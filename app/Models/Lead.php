<?php

namespace App\Models;

class Lead extends Model
{
    protected string $table = 'leads';
    protected array $fields = ['id', 'user_session_id', 'user_agent', 'user_ip', 'visit', 'mobile', 'lead_name', 'lead_email', 'lead_phone', 'lead_message', 'created_at'];
    protected string $created_column = 'created_at';
}
