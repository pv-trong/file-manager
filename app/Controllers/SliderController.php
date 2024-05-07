<?php

namespace App\Controllers;

use App\Models\Slider;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->model = new Slider();
        $this->form = 'pages/slider-manager/form';
        $this->scripts = [
            'ckfinder/ckfinder.js',
            'admin/vendors/sortablejs/Sortable.min.js',
            'admin/js/pages/slider-form.js',
        ];
        $this->styles = [
            'admin/css/slider-form.css',
        ];
        $this->route_list = '/backend/slider-manager';
    }
    public function index()
    {
        $sliders = $this->model->all();
        $data = [
            'scripts' => [
                'ckfinder/ckfinder.js',
                'admin/vendors/sortablejs/Sortable.min.js',
            ],
            'sliders' => $sliders,
        ];
        $this->renderWithLayout('pages/slider-manager/index', 'backend', $data);
    }
    function store()
    {
        $isCreated = $this->model->insert($_POST);
        if ($isCreated) {
            session_flash_set('message', [
                'type' => 'Success',
                'message' => 'Create successfully!'
            ]);
            header("Location: {$this->route_list}");
        } else {
            session_flash_set('message', [
                'type' => 'Danger',
                'message' => 'Failed!'
            ]);
            header("Refresh:0");
        }
    }
}
