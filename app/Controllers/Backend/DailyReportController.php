<?php

namespace App\Controllers\Backend;

use App\Controllers\Controller;
use App\Models\DirectDebitAccount;
use App\Models\Loading;
use App\Models\Safe360;
use App\Models\TankLevel;

class DailyReportController extends Controller
{
    private Loading $loading;
    private TankLevel $tankLevel;
    private Safe360 $safe360;
    private DirectDebitAccount $directDebitAccount;

    public function __construct()
    {
        $this->loading = new Loading();
        $this->tankLevel = new TankLevel();
        $this->safe360 = new Safe360();
        $this->directDebitAccount = new DirectDebitAccount();
    }

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
    public function createSafe360()
    {
        $this->renderWithLayout('forms/form-create-360');
    }
    public function storeSafe360()
    {
        $data = [
            'feul' => $_POST['feul'],
            'dry_stock' => $_POST['dry_stock'],
            'total_cdm' => $_POST['total_cdm'],
            'coin_shortage' => $_POST['coin_shortage'],
            'created_at' => date('Y/m/d H:i:s'),
        ];
        $isCreated = $this->safe360->insert($data);
        if ($isCreated) {
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
    public function editSafe360($id)
    {
        $data = $this->safe360->findById($id);
        $this->renderWithLayout('forms/form-create-360', 'backend', ['data' => $data]);
    }
    public function updateSafe360($id)
    {
        $data = [
            'feul' => $_POST['feul'],
            'dry_stock' => $_POST['dry_stock'],
            'total_cdm' => $_POST['total_cdm'],
            'coin_shortage' => $_POST['coin_shortage'],
            'created_at' => date('Y/m/d H:i:s'),
        ];
        $isUpdated = $this->safe360->updateById($id, $data);
        if ($isUpdated) {
            session_flash_set('message', [
                'type' => 'Success',
                'message' => 'Update Successfully!'
            ]);
            header("Location: /backend/daily-report");
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

    public function ajaxSafe360()
    {
        $data = $this->safe360->getDatatable();
        $count = $this->safe360->count();
        setDatatable($data, $count, $count);
    }

    public function ajaxDirectDebitAccount()
    {
        $data = $this->directDebitAccount->getDatatable();
        $count = $this->directDebitAccount->count();
        setDatatable($data, $count, $count);
    }
}
