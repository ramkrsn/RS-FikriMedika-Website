<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\ObatController;

Route::get('/', function () {
    return view('welcome');
});

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
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Route untuk menangani pengiriman form registrasi
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::resource('obat', ObatController::class);

