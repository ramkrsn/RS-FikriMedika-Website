<?php

use Illuminate\Support\Facades\Route;

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
    return view('informasiobat');
});
Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');

Route::get('/artikel', 'ArtikelController@index')->name('artikel');

Route::get('/artikel', 'App\Http\Controllers\ArtikelController@index')->name('artikel');

Route::get('/', function() {
    return view('Melihat_Jadwal_Dokter');
});
