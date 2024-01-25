<?php

namespace App\Controllers;

class PagesController extends Controller
{    public function index()
    {
        $this->renderWithLayout('index', 'guest');
    }

    public function dashboard()
    {
        $data = [
            'scripts' => [
                'vendors/apexcharts/apexcharts.js',
                'vendors/bootstrap-datepicker/js/bootstrap-datepicker.min.js',
                'js/pages/sales-dashboard.js',
                'js/pages/dashboard.js',
            ],
            'styles' => [
                'vendors/bootstrap-datepicker/css/bootstrap-datepicker.min.css',
            ]
        ];
        $this->renderWithLayout('dashboard', 'backend', $data);
    }
    public function about()
    {
        $this->renderWithLayout('pages/about', 'guest');
    }
    public function contact()
    {
        $this->renderWithLayout('pages/contact', 'guest');
    }
}
