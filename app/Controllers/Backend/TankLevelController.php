<?php

namespace App\Controllers\Backend;

use App\Controllers\Controller;
use App\Models\TankLevel;

class TankLevelController extends Controller
{
    public function __construct()
    {
        $this->model = new TankLevel();
        $this->form = 'forms/form-tank-level';
        $this->route_list = '/backend/daily-report';
        session_flash_set('tabCurrent', [
            'target' => '#tank-level-tab-pane',
        ]);
    }
}
