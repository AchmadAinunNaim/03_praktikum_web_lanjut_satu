<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//route biasa
Route::get('/home', function () {
    return view('home');
});

//route prefix
Route::prefix('product')->group(function () {
    Route::get('/productpakan', function () {
        return view('product');
    });
});

// route param
Route::get('/news/{title}', function ($title) {
    return view('news', ['title' => $title]);
});

Route::prefix('program')->group(function () {
    Route::get('/pembuatan', function () {
        return view('program');
    });
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::resource('contactus', ContactUsController::class)->only([
    'index'
]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// praktikum 2
// Halaman Dashboard
Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

//halaman profile
Route::get('/profile/{nim}', fn($nim)=> view('profile', ['nim' => $nim]));

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// halaman PengaLaman Kuliah
Route::get('/experience', function () {
    return view('experience');
});