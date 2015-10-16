<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'home\HomeController@index');
Route::get('/donor', 'home\HomeController@donorRegister');
Route::get('/request', 'home\HomeController@requestRegister');
Route::get('/login', 'home\HomeController@login');
Route::any('/loginaction', 'Auth\AuthController@postLogin');
Route::get('/dashboard', 'dashboard\DashboardController@index');
Route::get('/home', 'HomeController@index');
Route::any('/registeraction', 'donor\DonorController@register');
Route::get('/menulist', 'dashboard\DashboardController@listMenu');
Route::get('/addmenu', 'dashboard\DashboardController@addMenu');
Route::get('/logout', 'Auth\AuthController@getLogout');
