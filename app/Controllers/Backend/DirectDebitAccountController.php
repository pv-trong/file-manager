<?php

namespace App\Controllers\Backend;

use App\Controllers\Controller;
use App\Models\DirectDebitAccount;

class DirectDebitAccountController extends Controller
{
    public function __construct()
    {
        $this->model = new DirectDebitAccount();
        $this->view_create = 'forms/form-direct-debit-account';
        $this->view_edit = '';
        $this->route_list = '';
        $this->scripts = [
            'js/pages/form-dd-account.js',
        ];
    }
}
