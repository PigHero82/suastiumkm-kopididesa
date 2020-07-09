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

Route::get('/', function () {
    return redirect('/kasir');
});

// Kasir
Route::prefix('kasir')->group(function () {
    Route::get('/', function () {
        return view('kasir.order');
    });
    Route::get('/penjualan', function () {
        return view('kasir.penjualan');
    });
    Route::get('/pembayaran', function () {
        return view('kasir.pembayaran');
    });
});

//Admin
Route::prefix('admin')->group(function (){
    Route::get('/', function () {
        return view('admin.pembelanjaan');
    });
    Route::get('/stok', function () {
        return view('admin.stok');
    });
    Route::get('/hpp', function () {
        return view('admin.hpp');
    });
});

//Superadmin
Route::prefix('superadmin')->group(function (){
    Route::get('/', function () {
        return view('superadmin.labarugi');
    });
    Route::get('/stok', function () {
        return view('superadmin.stok');
    });
    Route::get('/laporan', function () {
        return view('superadmin.laporan');
    });
    Route::get('/laporan/a', function () {
        return view('superadmin.laporana');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
