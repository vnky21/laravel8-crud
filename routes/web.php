<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/',  [GuestController::class, 'index']);

Route::get('/dashboard',  [HomeController::class, 'index']);
Route::get('/cetak',  [HomeController::class, 'cetak']);

Route::get('/cetak/cetak-pdf', [BarangController::class, 'cetakPdf']);

Route::Resource('barang', BarangController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
