<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\notifikasiController;

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



Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/detail/{id}', [App\Http\Controllers\HomeController::class, 'detail'])->name('detail');

Route::get('/pinjam', [App\Http\Controllers\HomeController::class, 'pinjam'])->name('pinjam');

Route::get('/', [App\Http\Controllers\notifikasiController::class, 'index'])->name('tes');

