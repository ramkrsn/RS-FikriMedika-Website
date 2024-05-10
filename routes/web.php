<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;  
use App\Http\Controllers\JadwalController;


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
Route::get('/', [DoctorController::class, 'index']);


Route::get('createdokter', [DoctorController::class, 'doctor']);
Route::post('createdokter', [DoctorController::class, 'createdoctor']);

Route::get('updatedokter/{iddokter}/update', [DoctorController::class, 'edit_doctor']);
Route::patch('updatedokter/{iddokter}/update', [DoctorController::class, 'updatedoctor']);

Route::delete('/deletedoctor/{iddokter}/delete', [DoctorController::class, 'destroydoctor']);

Route::get('/jadwalpertemuan', [JadwalController::class, 'index']);

Route::post('/jadwalpertemuan', [JadwalController::class, 'store'])->name('jadwalpertemuan');
