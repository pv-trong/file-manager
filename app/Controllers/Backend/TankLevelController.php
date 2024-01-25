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
        $this->scripts = [
            'vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js',
            'js/pages/form-tank.js',
        ];
        $this->styles = [
            'vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css',
        ];
        session_flash_set('tabCurrent', [
            'target' => '#tank-level-tab-pane',
        ]);
    }
    function store()
    {
        $existed = $this->model->findBy('DATE(date)', date('Y-m-d'));
        if ($existed) {
            session_flash_set('message', [
                'type' => 'Danger',
                'message' => 'A record already exists today!'
            ]);
            if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
            exit();
        }
        $isCreated = $this->model->insert($_POST);
        if ($isCreated) {
            session_flash_set('message', [
                'type' => 'Success',
                'message' => 'Create successfully!'
            ]);
            header("Location: {$this->route_list}");
        } else {
            session_flash_set('message', [
                'type' => 'Danger',
                'message' => 'Failed!'
            ]);
            header("Refresh:0");
        }
    }
}
