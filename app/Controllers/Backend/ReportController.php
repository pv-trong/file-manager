<?php

namespace App\Controllers\Backend;

use App\Controllers\Controller;
use App\Models\Report;

class ReportController extends Controller
{
    private Report $reportModel;

    public function __construct()
    {
        $this->reportModel = new Report();
    }

    public function index()
    {
        $reports = $this->reportModel->all();
        $data = [
            'scripts' => [
                'vendors/datatables/jquery.dataTables.min.js',
                'vendors/datatables/dataTables.custom-ui.min.js',
                'js/pages/end-shirt-report.js',
            ],
            'reports' => $reports,
        ];
        $this->renderWithLayout('backend/end-shirt-report', 'backend', $data);
    }
    public function search()
    {
        $query = [
            'pos' => $_POST['pos'],
            'date_from' => $_POST['date_from'],
            'date_to' => $_POST['date_to'],
        ];
        $reports = $this->reportModel->search($query);
        $data = [
            'scripts' => [
                'vendors/datatables/jquery.dataTables.min.js',
                'vendors/datatables/dataTables.custom-ui.min.js',
                'js/pages/end-shirt-report.js',
            ],
            'reports' => $reports,
            'old' => $query
        ];
        $this->renderWithLayout('backend/end-shirt-report', 'backend', $data);
    }
    public function create()
    {
        $this->renderWithLayout('forms/form-report');
    }

    public function store()
    {
        $non_cash_payment = [
            'e-wallet' => $_POST['e-wallet'] ?? 0,
            'credit-card' => $_POST['credit-card'] ?? 0,
            'voucher' => $_POST['voucher'] ?? 0,
        ];
        $data = [
            'pos' => $_POST['pos'],
            'safe_drop' => $_POST['safe_drop'],
            'wet_stock' => $_POST['wet_stock'],
            'dry_stock' => $_POST['dry_stock'],
            'payout' => $_POST['payout'],
            'non_cash_payment' => json_encode($non_cash_payment),
            'total' => $_POST['safe_drop'] + $_POST['wet_stock'] + $_POST['dry_stock'] + $_POST['payout'],
            'created_at' => date('Y/m/d H:i:s'),
        ];
        $isCreated = $this->reportModel->insert($data);
        if ($isCreated) {
            session_flash_set('message', [
                'type' => 'Success',
                'message' => 'Create successfully!'
            ]);
            header("Location: /backend/end-shift-report");
        } else {
            session_flash_set('message', [
                'type' => 'Danger',
                'message' => 'Failed!'
            ]);
            header("Refresh:0");
        }
        exit();
    }

    public function edit($id)
    {
        $report = $this->reportModel->findById($id);
        $report->non_cash_payment = json_decode($report->non_cash_payment, true);
        $this->renderWithLayout('forms/form-report', 'backend', ['report' => $report]);
    }

    public function update($id)
    {
        $non_cash_payment = [
            'e-wallet' => $_POST['e-wallet'] ?? 0,
            'credit-card' => $_POST['credit-card'] ?? 0,
            'voucher' => $_POST['voucher'] ?? 0,
        ];
        $data = [
            'pos' => $_POST['pos'],
            'safe_drop' => $_POST['safe_drop'],
            'wet_stock' => $_POST['wet_stock'],
            'dry_stock' => $_POST['dry_stock'],
            'non_cash_payment' => json_encode($non_cash_payment),
            'payout' => $_POST['payout'],
            'total' => $_POST['safe_drop'] + $_POST['wet_stock'] + $_POST['dry_stock'] + $_POST['payout'],
        ];
        $isUpdated = $this->reportModel->updateById($id, $data);
        if ($isUpdated) {
            session_flash_set('message', [
                'type' => 'Success',
                'message' => 'Update Successfully!'
            ]);
            header("Location: /backend/end-shift-report");
            exit();
        } else {
            session_flash_set('message', [
                'type' => 'Danger',
                'message' => 'Failed!'
            ]);
            header("Refresh:0");
            exit();
        }
    }
}
