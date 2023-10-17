<?php

use App\Http\Controllers\HireController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ReservasiController;
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
Route::get('/about', function () {
    return view('informasi.about');
});

Route::get('/contact', function () {
    return view('informasi.contact');
});
Route::get('/portofolio', [PortofolioController::class, 'portofolio']);
Route::resource('/hire', HireController::class);
Route::resource('/reservasi', ReservasiController::class);
