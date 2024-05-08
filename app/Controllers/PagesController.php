<?php

namespace App\Controllers;

use App\Models\Slider;

class PagesController extends Controller
{
    private Slider $slider;
    public function __construct() {
        $this->slider = new Slider();
    }
    public function index()
    {
        $data = [
            'scripts' => [
                'js/pages/home.js',
            ],
        ];
        $firstSliders = $this->slider->all();
        $sliders = [];
        if ($firstSliders) {
            foreach($firstSliders as $slider) {
                $sliders[$slider['slider_key']] = explode(';', $slider['images']);
            }
        }
        $data['sliders'] =  $sliders;
        $this->renderWithLayout('index', 'guest', $data);
    }

    public function dashboard()
    {
        $data = [];
        $this->renderWithLayout('dashboard', 'backend', $data);
    }
    public function fileManager()
    {
        $data = [
            'scripts' => [
                'ckfinder/ckfinder.js',
            ],
        ];
        $this->renderWithLayout('pages/file-manager', 'backend', $data);
    }
}
