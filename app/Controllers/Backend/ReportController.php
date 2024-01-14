<?php

namespace App\Controllers\Backend;

use App\Controllers\Controller;

class ReportController extends Controller
{
    public function index()
    {
        $data = [
            'scripts' => [
                'vendors/datatables/jquery.dataTables.min.js',
                'vendors/datatables/dataTables.custom-ui.min.js',
                'js/pages/end-shirt-report.js',
            ],
        ];
        $this->renderWithLayout('backend/end-shirt-report','backend', $data);
    }
}