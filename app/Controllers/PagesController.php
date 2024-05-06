<?php

namespace App\Controllers;

class PagesController extends Controller
{    public function index()
    {
        $this->renderWithLayout('index', 'guest');
    }

    public function dashboard()
    {
        $data = [];
        $this->renderWithLayout('dashboard', 'backend', $data);
    }
    public function fileManager() {
        $data = [
            'scripts' => [
                'ckfinder/ckfinder.js',
            ],
        ];
        $this->renderWithLayout('pages/file-manager', 'backend', $data);
    }
}
