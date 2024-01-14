<?php

namespace App\Controllers\Backend;

use App\Controllers\Controller;
use App\Models\Report;

class ReportController extends Controller
{
    private Report $model;

    public function __construct()
    {
        $this->model = new Report();
    }

    public function index()
    {
        $reports = $this->model->all();
        $data = [
            'scripts' => [
                'vendors/datatables/jquery.dataTables.min.js',
                'vendors/datatables/dataTables.custom-ui.min.js',
                'js/pages/end-shirt-report.js',
            ],
            'reports'=> $reports,
        ];
        $this->renderWithLayout('backend/end-shirt-report','backend', $data);
    }
    public function search()
    {
        $query = [
            'pos' => $_POST['pos'],
            'date_from' => $_POST['date_from'],
            'date_to' => $_POST['date_to'],
        ];
        $reports = $this->model->search($query);
        $data = [
            'scripts' => [
                'vendors/datatables/jquery.dataTables.min.js',
                'vendors/datatables/dataTables.custom-ui.min.js',
                'js/pages/end-shirt-report.js',
            ],
            'reports'=> $reports,
            'old'=> $query
        ];
        $this->renderWithLayout('backend/end-shirt-report','backend', $data);
    }
    public function create()
    {
        $this->renderWithLayout('backend/form-report');
    }

    public function store()
    {
        $data = [
            'pos' => $_POST['pos'],
            'safe_drop' => $_POST['safe_drop'],
            'wet_stock' => $_POST['wet_stock'],
            'dry_stock' => $_POST['dry_stock'],
            'payout' => $_POST['payout'],
            'non_cash_payment' => $_POST['non_cash_payment'],
            'total' => $_POST['safe_drop'] + $_POST['wet_stock'] + $_POST['dry_stock'] + $_POST['payout'],
            'created_at' => date('Y/m/d H:i:s'),
        ];
        $isCreated = $this->model->insert($data);
        if ($isCreated) {
            session_flash_set('message',[
                'type'=> 'Success',
                'message'=> 'Create successfully!'
            ]);
            header("Location: /backend/end-shift-report");
        } else {
            session_flash_set('message',[
                'type'=> 'Danger',
                'message'=> 'Failed!'
            ]);
            header("Refresh:0");
        }
    }

    public function edit($id)
    {
        $report = $this->model->findById($id);
        $this->renderWithLayout('backend/form-report','backend' , ['report' => $report]);
    }

    public function update($id)
    {
        $data = [
            'pos' => $_POST['pos'],
            'safe_drop' => $_POST['safe_drop'],
            'wet_stock' => $_POST['wet_stock'],
            'dry_stock' => $_POST['dry_stock'],
            'non_cash_payment' => $_POST['non_cash_payment'],
            'payout' => $_POST['payout'],
            'total' => $_POST['safe_drop'] + $_POST['wet_stock'] + $_POST['dry_stock'] + $_POST['payout'],
        ];
        $isUpdated = $this->model->updateById($id, $data);
        if ($isUpdated) {
            session_flash_set('message',[
                'type'=> 'Success',
                'message'=> 'Update Successfully!'
            ]);
            header("Location: /backend/end-shift-report");
        } else {
            session_flash_set('message',[
                'type'=> 'Danger',
                'message'=> 'Failed!'
            ]);
            header("Refresh:0");
        }
    }
}