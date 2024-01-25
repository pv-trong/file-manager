<?php

namespace App\Controllers\Backend;

use App\Controllers\Controller;
use App\Models\DirectDebitAccount;
use App\Models\Loading;
use App\Models\MySQL;
use App\Models\Report;
use App\Models\Safe360;
use App\Models\TankLevel;

class ReportController extends Controller
{
    private Report $reportModel;
    private TankLevel $tankLevel;
    private Safe360 $safe360;
    private DirectDebitAccount $directDebitAccount;
    private Loading $loading;
    private MySQL $MySQL;

    public function __construct()
    {
        $this->reportModel = new Report();
        $this->tankLevel = new TankLevel();
        $this->safe360 = new Safe360();
        $this->directDebitAccount = new DirectDebitAccount();
        $this->loading = new Loading();
        $this->MySQL = new MySQL();
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

    public function report()
    {
        $safe_360 = $this->safe360->report();
        $tank_level = $this->tankLevel->report();
        $direct_debit_account = $this->directDebitAccount->report();
        $loading = $this->loading->report();
        $this->MySQL->getModel()->close();
        echo json_encode([
            'safe360' => $safe_360,
            'tank_level' => $tank_level,
            'direct_debit_account' => $direct_debit_account,
            'loading' => $loading,
        ]);
    }
}
