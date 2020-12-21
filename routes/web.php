<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('Pejuang Aman', function () {
    return view('Pejuang Aman');
});

Route::get('Penanganan Kesehatan', function () {
    return view('Penanganan Kesehatan');
});

Route::get('Seputar Covid', function () {
    return view('Seputar Covid');
});

Route::get('Cek Kesehatan', function () {
    return view('Cek Kesehatan');
});