<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AntrianController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/queue', [AntrianController::class, "index"])->name('queue.index');
Route::get('/queue/{id}', [AntrianController::class, "show"])->name('queue.show');
