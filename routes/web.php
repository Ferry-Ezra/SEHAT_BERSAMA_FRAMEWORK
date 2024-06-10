<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PenggunaController;

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [DashboardController::class,'index'])->name('home');

//Routing untuk menampilkan halaman pasien
Route::get('/pasien',[PasienController::class, 'index'])->name('pasien');
//Routing untuk menampilkan halaman tambah data pasien
Route::get('/pasien-entry',[PasienController::class, 'create'])->name('pasien-entry');
//Routing untuk melakukan tambah data ke dalam database
Route::post('/pasien-store',[PasienController::class, 'store'])->name('pasien-store');
//Routing untuk melakukan update data dalam database
Route::post('/pasien-update/{id}',[PasienController::class, 'update'])->name('pasien-update');
//Routing untuk melakukan delete data dalam database
Route::get('/pasien-delete/{id}',[PasienController::class, 'destroy'])->name('pasien-delete');


//Routing untuk menampilkan halaman pembayaran
Route::get('/pembayaran',[PembayaranController::class, 'index'])->name('pembayaran');
//Routing untuk menampilkan halaman tambah data pembayaran
Route::get('/pembayaran-entry',[PembayaranController::class, 'create'])->name('pembayaran-entry');
//Routing untuk melakukan tambah data ke dalam database
Route::post('/pembayaran-store',[PembayaranController::class, 'store'])->name('pembayaran-store');
//Routing untuk melakukan update data dalam database
Route::post('/pembayaran-update/{id}',[PembayaranController::class, 'update'])->name('pembayaran-update');
//Routing untuk melakukan delete data dalam database
Route::get('/pembayaran-delete/{id}',[PembayaranController::class, 'destroy'])->name('pembayaran-delete');


//Routing untuk report
Route::get('/pasien-report',[PasienController::class, 'cetak'])->name('pasien-report');
Route::get('/pembayaran-report',[PembayaranController::class, 'cetak'])->name('pembayaran-report');
