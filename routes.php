<?php

use App\Router;
$router = new Router();
$router->get('/', 'PagesController@index');
$router->get('/contact', 'PagesController@contact');
$router->get('/about', 'PagesController@about');

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

$router->get('/backend/daily-report','Backend\DailyReportController@index');

$router->post('/backend/ajax/safe360','Backend\Safe360Controller@getAjaxDatatable');
$router->get('/backend/safe360/create','Backend\Safe360Controller@create');
$router->post('/backend/safe360/store','Backend\Safe360Controller@store');
$router->get('/backend/safe360/edit/{id}','Backend\Safe360Controller@edit');
$router->post('/backend/safe360/update/{id}','Backend\Safe360Controller@update');
$router->get('/backend/safe360/destroy/{id}','Backend\Safe360Controller@destroy');

$router->post('/backend/ajax/direct-debit-account','Backend\DirectDebitAccountController@getAjaxDatatable');
$router->get('/backend/dd-account/create','Backend\DirectDebitAccountController@create');
$router->post('/backend/dd-account/store','Backend\DirectDebitAccountController@store');
$router->get('/backend/dd-account/destroy/{id}','Backend\DirectDebitAccountController@destroy');

$router->post('/backend/ajax/tank-level','Backend\TankLevelController@getAjaxDatatable');
$router->get('/backend/tank-level/create','Backend\TankLevelController@create');
$router->post('/backend/tank-level/store','Backend\TankLevelController@store');
$router->get('/backend/tank-level/edit/{id}','Backend\TankLevelController@edit');
$router->post('/backend/tank-level/update/{id}','Backend\TankLevelController@update');
$router->get('/backend/tank-level/destroy/{id}','Backend\TankLevelController@destroy');

$router->post('/backend/ajax/loading','Backend\LoadingController@getAjaxDatatable');
$router->get('/backend/loading/create','Backend\LoadingController@create');
$router->post('/backend/loading/store','Backend\LoadingController@store');
$router->get('/backend/loading/edit/{id}','Backend\LoadingController@edit');
$router->post('/backend/loading/update/{id}','Backend\LoadingController@update');
$router->get('/backend/loading/destroy/{id}','Backend\LoadingController@destroy');

$router->get('/backend/financial-statement','Backend\FinancialStatementController@index');
$router->post('/backend/financial-statement','Backend\FinancialStatementController@getData');

$router->post('/backend/daily-report-dashboard','Backend\ReportController@report');

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
