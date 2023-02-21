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
    echo "Selamat Datang";
});

Route::get('/hello', function () {
    echo "Hello";
});

Route::get('/about', function () {
    echo "Nama : Yofandra Arta Priyoga <br>";
    echo "NIM  : 2141720121";
});

Route::get('/articles/{id}', function ($id) {
    echo "Ini adalah artikel ke " . $id;
});
