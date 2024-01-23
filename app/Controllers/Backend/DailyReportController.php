<?php

namespace App\Controllers\Backend;

use App\Controllers\Controller;

class DailyReportController extends Controller
{
    public function index()
    {
        $data = [
            'scripts' => [
                'vendors/datatables/jquery.dataTables.min.js',
                'vendors/datatables/dataTables.custom-ui.min.js',
                'vendors/moment/moment.js',
                'js/pages/daily-report.js',
            ],
        ];
        $this->renderWithLayout('backend/daily-report', 'backend', $data);
    }
}
