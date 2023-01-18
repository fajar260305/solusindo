<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckInController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PesanTiketController;

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

Route::get('/home', [PesanTiketController::class, 'index'])->name('home')->middleware('auth:web');
Route::get('/pesan_tiket', [PesanTiketController::class, 'pesan'])->middleware('auth:web');
Route::post('/addTiket', [PesanTiketController::class, 'addPesan'])->middleware('auth:web');
Route::get('/tiket', [PesanTiketController::class, 'tiket'])->middleware('auth:web');

Route::resource('/laporan', LaporanController::class)->middleware('auth:admin');
Route::resource('/admin', AdminController::class)->middleware('auth:admin');

Route::get('/check_in', [CheckInController::class, 'index'])->middleware('auth:admin');
Route::post('/check_in/{id}', [CheckInController::class, 'addCheckin'])->middleware('auth:admin');

Route::get('/', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [AuthController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('guest');






