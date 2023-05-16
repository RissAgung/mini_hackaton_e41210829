<?php

use App\Http\Controllers\daftarController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\register_controller;
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

Route::get('/', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/cekLogin', [loginController::class, 'cek_login']);
Route::get('/logout', [loginController::class, 'logout'])->name('logout');

Route::get('/register', [register_controller::class, 'index']);
Route::post('/register.store', [register_controller::class, 'store']);

Route::post('/daftar.store', [daftarController::class, 'submitDaftar']);
Route::get('/edit_data/{data}', [daftarController::class, 'showEdit'])->middleware('auth');
Route::post('/edit_data.store', [daftarController::class, 'edit_data'])->middleware('auth');
Route::get('/delete_data/{id}', [daftarController::class, 'deleteData'])->middleware('auth');

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/add_data', function () {
  return view('add_data');
})->name('add_data');
