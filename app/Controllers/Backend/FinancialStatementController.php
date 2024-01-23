<?php

namespace App\Controllers\Backend;

use App\Controllers\Controller;

class FinancialStatementController extends Controller
{
    public function __construct()
    {
        $this->view_index = 'backend/financial-statement';
    }
}
