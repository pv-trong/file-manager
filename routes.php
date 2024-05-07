<?php

use App\Router;

$router = new Router();
$router->get('/', 'PagesController@index');

$router->get('/login', 'Auth\LoginController@index');
$router->post('/login', 'Auth\LoginController@login');
$router->get('/logout', 'Auth\LoginController@logout');

$router->get('/register', 'Auth\RegisterController@index');
$router->post('/register', 'Auth\RegisterController@register');

$router->get('/backend/dashboard', 'PagesController@dashboard');

$router->get('/backend/file-manager', 'PagesController@fileManager');

$router->get('/backend/slider-manager', 'SliderController@index');
$router->get('/backend/slider-manager/create', 'SliderController@create');
$router->post('/backend/slider-manager/store', 'SliderController@store');

$router->get('/backend/slider-manager/edit/{id}', 'SliderController@edit');
$router->post('/backend/slider-manager/update/{id}', 'SliderController@update');

$router->get('/backend/slider-manager/destroy/{id}', 'SliderController@destroy');

$router->post('/lead-store', 'LeadController@store');
//Middleware
$router->addMiddleware(function ($method, $path) {
    md_guest($method, $path, '/login');
    md_guest($method, $path, '/register');

    md_auth($method, $path, '/backend/dashboard');
});
$router->resolve();
