<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::redirect('/', '/kasir', 301);

// Kasir
Route::prefix('kasir')->group(function () {
    Route::view('/', 'kasir.order')->name('kasir.order');
    Route::view('/penjualan', 'kasir.penjualan')->name('kasir.penjualan');
    Route::view('/pembayaran', 'kasir.pembayaran')->name('kasir.pembayaran');
});

//Admin
Route::prefix('admin')->group(function () {
    Route::view('/', 'admin.pembelanjaan')->name('admin.pembelanjaan');
    Route::view('/stok', 'admin.stok')->name('admin.stok');
    Route::view('/hpp', 'admin.hpp')->name('admin.hpp');
});

//Superadmin
Route::prefix('superadmin')->group(function () {
    Route::view('/', 'superadmin.labarugi')->name('superadmin.labarugi');
    Route::view('/stok', 'superadmin.stok')->name('superadmin.stok');
    Route::view('/laporan', 'superadmin.laporan')->name('superadmin.laporan');
    Route::view('/laporan/a', 'superadmin.laporana')->name('superadmin.laporana');
});