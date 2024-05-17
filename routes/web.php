<?php

use Illuminate\Support\Facades\Route;
<<<<<<< Updated upstream

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
=======
use App\Http\Controllers\ObatController;
use App\Http\Controllers\UserController;    
use App\Http\Controllers\AntrianController;    

>>>>>>> Stashed changes

Route::get('/', function () {
    return view('informasiobat');
});
Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');

<<<<<<< Updated upstream
Route::get('/artikel', 'ArtikelController@index')->name('artikel');

Route::get('/artikel', 'App\Http\Controllers\ArtikelController@index')->name('artikel');
=======
Route::get('/queue', [AntrianController::class, "index"])->name('queue.index');
Route::get('/queue/{id}', [AntrianController::class, "show"])->name('queue.show');

// routes/web.php


Route::get('/login', function () {
    return view('login'); // login.blade.php
})->name('login');

Route::get('/register', function () {
    return view('register'); // register.blade.php
})->name('register');

// Route untuk menampilkan form registrasi
Route::post('/register', [UserController::class, 'register'])->name('register');

// Route untuk menangani pengiriman form registrasi

Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::resource('obat', ObatController::class);

Route::get('/admin/dashboard', function () {
    // Konten halaman dashboard admin
})->middleware('admin');


>>>>>>> Stashed changes
