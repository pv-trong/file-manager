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
            'sliders' => [
                'sliderFirst' => null,
            ],
        ];
        $firstSlider = $this->slider->findBy('slider_key', 'first-slider');
        if ($firstSlider) {
            $firstSlider->images = explode(';', $firstSlider->images);
            $data['sliders']['sliderFirst'] = $firstSlider;
        }
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
