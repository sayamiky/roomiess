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

Route::get('/', function () {
    return view('home');
});

//login 
Route::get('/login','AuthController@login');
Route::post('/proseslogin','AuthController@proseslogin');
Route::get('/logout','AuthController@logout');

Route::get('/dashboards','DashboardController@dashboard');
//Form
Route::get('/pegawai','PegawaiController@pegawai');
