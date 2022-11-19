<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JualSatuanController;
use App\Http\Controllers\StockController;

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

Route::get('/', function () {
    return view('home')->with([
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about')->with([
        'title' => 'About'
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::resource('databarang', BarangController::class)->middleware('auth');

Route::resource('stock', StockController::class)->middleware('auth');

Route::get('/penjualan/create/checkHargaModal', [JualSatuanController::class, 'checkHargaModal'])->middleware('auth');
Route::resource('penjualan', JualSatuanController::class)->middleware('auth');