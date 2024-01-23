<?php

namespace App\Controllers\Backend;

use App\Controllers\Controller;
use App\Models\Loading;

class LoadingController extends Controller
{
    public function __construct()
    {
        $this->model = new Loading();
        $this->form = 'forms/form-loading';
        $this->route_list = '/backend/daily-report';
        session_flash_set('tabCurrent', [
            'target' => '#loading-tab-pane',
        ]);
    }
}
