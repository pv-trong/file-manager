<?php

namespace App\Controllers\Backend;

use App\Controllers\Controller;
use App\Models\DirectDebitAccount;
use DateTime;

class DirectDebitAccountController extends Controller
{
    public function __construct()
    {
        $this->model = new DirectDebitAccount();
        $this->form = 'forms/form-direct-debit-account';
        $this->route_list = '/backend/daily-report';
        $this->scripts = [
            'js/pages/form-dd-account.js',
        ];
        session_flash_set('tabCurrent', [
            'target' => '#dd-account-tab-pane',
        ]);
    }
    public function store()
    {
        foreach ($_POST['data'] as $key => $item) {
            $_POST['data'][$key]['date'] = DateTime::createFromFormat('d/m/Y', $item['date'])->format('Y-m-d');
        }
        $isInserted = $this->model->inserts($_POST['data']);
        if ($isInserted) {
            session_flash_set('message', [
                'type' => 'Success',
                'message' => 'Create successfully!'
            ]);
            header("Location: /backend/daily-report");
        } else {
            session_flash_set('message', [
                'type' => 'Danger',
                'message' => 'Failed!'
            ]);
            header("Refresh:0");
        }
    }
}
