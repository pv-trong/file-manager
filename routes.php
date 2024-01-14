<?php

use App\Router;
$router = new Router();
$router->get('/', 'PagesController@index');

$router->get('/login', 'Auth\LoginController@index');
$router->post('/login', 'Auth\LoginController@login');
$router->get('/logout', 'Auth\LoginController@logout');

$router->get('/register','Auth\RegisterController@index');
$router->post('/register','Auth\RegisterController@register');

$router->get('/backend/dashboard','PagesController@dashboard');

$router->get('/backend/end-shift-report','Backend\ReportController@index');
$router->post('/backend/end-shift-report','Backend\ReportController@search');
$router->get('/backend/end-shift-report/create','Backend\ReportController@create');
$router->post('/backend/end-shift-report/store','Backend\ReportController@store');
$router->get('/backend/end-shift-report/edit/{id}','Backend\ReportController@edit');
$router->post('/backend/end-shift-report/update/{id}','Backend\ReportController@update');

$router->get('/backend/financial-statement','Backend\ReportController@index');

//Middleware
$router->addMiddleware(function ($method, $path) {
    md_guest($method, $path,'/login');
    md_guest($method, $path,'/register');

    md_auth($method, $path,'/backend/dashboard');
    md_auth($method, $path,'/backend/end-shirt-report');
    md_auth($method, $path,'/backend/financial-statement');
    md_auth($method, $path,'/backend/end-shift-report/store');
});
$router->resolve();
