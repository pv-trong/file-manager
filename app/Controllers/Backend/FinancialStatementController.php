<?php

namespace App\Controllers\Backend;

use App\Controllers\Controller;
use App\Models\MySQL;
use App\Models\Report;
use App\Models\Safe360;

class FinancialStatementController extends Controller
{
    private $report;
    private $safe360;
    private $mysql;
    public function __construct()
    {
        $this->view_index = 'backend/financial-statement';
        $this->report = new Report();
        $this->safe360 = new Safe360();
        $this->mysql = new MySQL();
    }
    public function index()
    {
        $data = [
            'scripts' => [
                'js/pages/final-statement.js',
            ],
        ];
        $this->renderWithLayout($this->view_index, 'backend', $data);
    }

    public function getData()
    {
        [$cash, $final] = $this->report->getData();
        $totalCDM = $this->safe360->getTotalCDM();
        $this->mysql->getModel()->close();
        echo json_encode(array(
            'cash' => $cash,
            'final' => $final,
            'whole' => $final + $cash,
            'total_cdm' => $totalCDM,
        ));
    }
}
