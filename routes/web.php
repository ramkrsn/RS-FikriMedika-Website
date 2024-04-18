<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilRumahSakitController;

use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\GuestMiddleware;

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
Route::get('/', [ProfilRumahSakitController::class, 'index'])->name('ProfilRumahSakit');

Route::get('/', function () {
    return view('ProfilRumahSakit');
});
