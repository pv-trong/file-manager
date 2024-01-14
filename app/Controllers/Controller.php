<?php

namespace App\Controllers;
class Controller
{
    function render($file, $data = array())
    {
        $view_file = __DIR__ . '/../../views/' . $file . '.php';
        if (is_file($view_file)) {
            extract($data);
            include $view_file;
        } else {
            echo 'view không tồn tại';
        }
    }

    function renderWithLayout($file, $layout = 'backend', $data = array())
    {
        $content = __DIR__ . '/../../views/' . $file . '.php';
        $view_file_layout = __DIR__ . '/../../views/layouts/' . $layout . '.php';
        if (is_file($content) && is_file($view_file_layout)) {
            extract($data);
            include $view_file_layout;
        } else {
            echo 'view không tồn tại';
        }
    }
}
