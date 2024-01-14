<?php

namespace App\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        $this->render('index');
    }

    public function dashboard()
    {
        $this->renderWithLayout('dashboard');
    }
}
