<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Auth\LoginController@showLogin'); //Raiz

Route::post('login', 'Auth\LoginController@login')->name('login');//Login

Route::post('logout', 'Auth\LoginController@logout')->name('logout');//logout

Route::get('dashboard', 'DashboardController@index')->name('dashboard');//Panel principal
