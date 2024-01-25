<?php

namespace App\Controllers\Backend;

use App\Controllers\Controller;
use App\Models\Loading;
use DateTime;

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
        $isCreated = $this->model->insert(array_merge($_POST, [
            'date' => DateTime::createFromFormat('d/m/Y', $_POST['date'])->format('Y-m-d'),
        ]));
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
