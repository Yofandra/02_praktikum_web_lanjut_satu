<?php

// use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;

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

/*Praktikum 1
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
*/


/*Praktikum 2
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);
*/

//Praktikum 3
//1.
Route::get('/', function () {
    echo "Selamat Datang Di Website EducaStudio";
});
//2.
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', function () {
        echo "Marbel Edu Games";
    });
    Route::get('/marbel-and-friend-kids-games', function () {
        echo "Marbel and Friend kids Games";
    });
    Route::get('/riri-story-books', function () {
        echo "Riri Story Books";
    });
    Route::get('/kolak-kids-songs', function () {
        echo "Kolak Kids Songs";
    });
});

//3.
Route::get('/news/{name?}', function ($name = null) {
    return 'Anda menuju Berita ' . $name;
});

//4.
Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        echo "Ini Program Karir";
    });
    Route::get('/magang', function () {
        echo "Ini Program Magang";
    });
    Route::get('/kunjungan-industri', function () {
        echo "Ini Program Kunjungan Industri";
    });
});

//5.
Route::get('/about-us', function () {
    echo "About Us";
});

//6.
Route::resource('contact-us', ContactController::class)->only([
    'show'
]);
