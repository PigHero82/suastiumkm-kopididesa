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
Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');

Route::redirect('/', '/login', 301);

//Superadmin
Route::prefix('superadmin')->group(function () {
    Route::get('/', 'SuperAdmin\HomeController@index')->name('superadmin.home');
    Route::view('/', 'superadmin.labarugi')->name('superadmin.labarugi');
    Route::view('/stok', 'superadmin.stok')->name('superadmin.stok');
    Route::view('/laporan', 'superadmin.laporan')->name('superadmin.laporan');
    Route::view('/laporan/a', 'superadmin.laporana')->name('superadmin.laporana');
});


// Kasir Mart
Route::prefix('mart')->group(function () {
    Route::get('/', 'KasirMart\HomeController@index')->name('kasir.mart.home');
    // Route::view('/', 'kasir.order')->name('kasir.order');
    Route::resource('/', 'KasirCafe\KasirController')->names([
        'index' => 'kasir.index',
        'store' => 'kasir.store'
    ]);
    Route::view('/penjualan', 'kasir.penjualan')->name('kasir.penjualan');
    Route::view('/pembayaran', 'kasir.pembayaran')->name('kasir.pembayaran');
});

// Kasir Cafe & Resto
Route::prefix('cafe')->group(function () {
    Route::get('/', 'KasirCafeResto\HomeController@index')->name('kasir.cafe.home');
    Route::post('/pembayaran', 'KasirCafeResto\HomeController@pembayaran')->name('kasir.cafe.pembayaran');
    Route::post('/validasi-pembayaran', 'KasirCafeResto\HomeController@validasiPembayaran')->name('kasir.cafe.validasiPembayaran');
    Route::get('/penjualan', 'KasirCafeResto\HomeController@penjualan')->name('kasir.cafe.penjualan');
});

// Kasir Lain-lain
Route::prefix('lain')->group(function () {
    Route::get('/', 'KasirLain\HomeController@index')->name('kasir.lain.home');
    // Route::view('/', 'kasir.order')->name('kasir.order');
    Route::resource('/', 'KasirCafe\KasirController')->names([
        'index' => 'kasir.index',
        'store' => 'kasir.store'
    ]);
    Route::view('/penjualan', 'kasir.penjualan')->name('kasir.penjualan');
    Route::view('/pembayaran', 'kasir.pembayaran')->name('kasir.pembayaran');
});

//Admin Mart
Route::prefix('admin/mart')->group(function () {
    Route::resource('/', 'AdminCafe\PengeluaranController')->names([
        'index' => 'admin.mart.index',
        'store' => 'admin.mart.store'
    ]);
    // Route::view('/', 'admin.pembelanjaan')->name('admin.pembelanjaan');
    Route::resource('/stok', 'AdminCafe\StokController')->except(['update']);
    Route::post('/stok/update', 'AdminCafe\StokController@update')->name('stok.update');
    Route::view('/hpp', 'admin.hpp')->name('admin.hpp');
});

//Admin Cafe
Route::prefix('admin/cafe')->group(function () {
    Route::resource('/', 'AdminCafe\PengeluaranController')->names([
        'index' => 'admin.cafe.index',
        'store' => 'admin.cafe.store'
    ]);
    // Route::view('/', 'admin.pembelanjaan')->name('admin.pembelanjaan');
    Route::resource('/stok', 'AdminCafe\StokController')->except(['update'])->names([
        'index' => 'admin.cafe.stok.index',
        'store' => 'admin.cafe.stok.store'
    ]);
    Route::post('/stok/update', 'AdminCafe\StokController@update')->name('admin.cafe.stok.update');
    Route::view('/hpp', 'admin.hpp')->name('admin.cafe.hpp');
});

//Admin Resto
Route::prefix('admin/resto')->group(function () {
    Route::resource('/', 'AdminCafe\PengeluaranController')->names([
        'index' => 'admin.resto.index',
        'store' => 'admin.resto.store'
    ]);
    // Route::view('/', 'admin.pembelanjaan')->name('admin.pembelanjaan');
    Route::resource('/stok', 'AdminCafe\StokController')->except(['update']);
    Route::post('/stok/update', 'AdminCafe\StokController@update')->name('stok.update');
    Route::view('/hpp', 'admin.hpp')->name('admin.hpp');
});

//Admin Lain-lain
Route::prefix('admin/lain')->group(function () {
    Route::resource('/', 'AdminCafe\PengeluaranController')->names([
        'index' => 'admin.lain.index',
        'store' => 'admin.lain.store'
    ]);
    // Route::view('/', 'admin.pembelanjaan')->name('admin.pembelanjaan');
    Route::resource('/stok', 'AdminCafe\StokController')->except(['update']);
    Route::post('/stok/update', 'AdminCafe\StokController@update')->name('stok.update');
    Route::view('/hpp', 'admin.hpp')->name('admin.hpp');
});
