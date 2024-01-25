<?php

namespace App\Controllers;

class Controller
{
    protected $model = null;
    protected $form;
    protected $view_index;
    protected $route_list;
    protected $scripts = [];
    protected $styles = [];
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
    function index()
    {
        $data = [
            'scripts' => [
                'vendors/datatables/jquery.dataTables.min.js',
                'vendors/datatables/dataTables.custom-ui.min.js',
            ],
        ];
        $this->renderWithLayout($this->view_index, 'backend', $data);
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
    function create()
    {
        $this->renderWithLayout($this->form, 'backend', ['scripts' => $this->scripts, 'styles' => $this->styles]);
    }
    function edit($id)
    {
        $data = $this->model->findById($id);
        $this->renderWithLayout($this->form, 'backend', ['dataView' => $data, 'scripts' => $this->scripts, 'styles' => $this->styles]);
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
    function update($id)
    {
        $isUpdated = $this->model->updateById($id, $_POST);
        if ($isUpdated) {
            session_flash_set('message', [
                'type' => 'Success',
                'message' => 'Update Successfully!'
            ]);
            header("Location: {$this->route_list}");
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
    function destroy($id)
    {
        $isDestroyed = $this->model->destroy($id);
        if ($isDestroyed) {
            session_flash_set('message', [
                'type' => 'Success',
                'message' => 'Destroy successfully!'
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
    function getAjaxDatatable()
    {
        $data = $this->model->getDatatable();
        $count = $this->model->count();
        setDatatable($data, $count, $count);
    }
}
