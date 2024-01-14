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

//Middleware
$router->addMiddleware(function ($method, $path) {
    md_guest($method, $path,'/login');
    md_guest($method, $path,'/register');

    md_auth($method, $path,'/backend/dashboard');
    md_auth($method, $path,'/backend/end-shirt-report');
});
$router->resolve();
