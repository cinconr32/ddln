<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JualSatuanController;

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
    return view('home');
});

// Route::get('/databarang', [BarangController::class, 'index']);
// Route::get('/databarang/edit/{barang}', [BarangController::class, 'edit']);
// Route::patch('/databarang/update/', [BarangController::class, 'update']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('databarang', BarangController::class);

Route::get('/penjualan/create/checkHargaModal', [JualSatuanController::class, 'checkHargaModal'])->middleware('auth');
Route::resource('penjualan', JualSatuanController::class)->middleware('auth');