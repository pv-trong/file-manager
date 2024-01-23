<?php

namespace App\Controllers\Backend;

use App\Controllers\Controller;
use App\Models\Safe360;

class Safe360Controller extends Controller
{
    public function __construct()
    {
        $this->model = new Safe360();
        $this->form = 'forms/form-create-360';
        $this->route_list = '/backend/daily-report';
        session_flash_set('tabCurrent', [
            'target' => '#safe-360-tab-pane',
        ]);
    }
}
