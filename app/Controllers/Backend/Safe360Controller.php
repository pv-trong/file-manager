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
    function store()
    {
        $existed = $this->model->findBy('DATE(created_at)', date('Y-m-d'));
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
            if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
            exit();
        }
    }
}
