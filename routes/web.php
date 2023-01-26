<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\EmailUndanganController;
use App\Http\Controllers\Laporan\LaporanCaffeController;
use App\Http\Controllers\Laporan\LaporanPelamarController;
use App\Http\Controllers\Laporan\LaporanPenerimaanController;
use App\Http\Controllers\Laporan\LaporanLowonganController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Pelamar\PelamarController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\LaporanPelamarController as ControllersLaporanPelamarController;
use FontLib\Table\Type\name;

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

Route::get('/', [HomeController::class, 'index'])->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/authenticate', [LoginController::class, 'authenticate']);

Route::get('/recruitment', function () {
    return view('home.recruitment');
});
Route::get('/faq', function () {
    return view('home.faq');
});
Route::get('/contact', function () {
    return view('home.hubungi');
});
//admin
Route::group(['namespace' => 'Admin', 'middleware' => 'auth', 'prefix' => 'admin'], function () {

    Route::get('/', [AdminController::class, 'index'])->name('admin')->middleware(['can:admin']);

    //Route Rescource
    Route::resource('/pelamar', 'UserController')->middleware(['can:admin']);
});
//end admin

//user
Route::group(['namespace' => 'Pelamar', 'middleware' => 'auth', 'prefix' => 'pelamar'], function () {
    Route::get('/', [PelamarController::class, 'index'])->name('pelamar');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::patch('/profile/update/{pelamar}', [ProfileController::class, 'update'])->name('profile.update');
});
//end user

//tombol approval
Route::post('/terima/{id_lamaran}', [AdminController::class, 'terima'])->name('admin.terima');
Route::post('/tolak/{id_lamaran}', [AdminController::class, 'tolak'])->name('admin.tolak');

//email undangan
Route::get('emailundangan', [EmailUndanganController::class, 'index'])->name('emailundangan');
Route::post('kirimemail', [EmailUndanganController::class, 'kirimemail']);
//
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/rekrutmen', [AdminController::class, 'rekrutmen'])->middleware('auth');

Route::get('/rekrutmen', [AdminController::class, 'rekrutmen'])->middleware('auth');
Route::get('/lamaran', [PelamarController::class, 'lamar'])->middleware('auth');
Route::get('/status', [PelamarController::class, 'status'])->middleware('auth');
Route::post('/lamarpekerjaan', [PelamarController::class, 'store'])->name('lamarpekerjaan');
Route::get('/admin.lamaran', [AdminController::class, 'lamaran'])->middleware('auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('guest');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/caffe', [AdminController::class, 'caffe'])->middleware('auth');

//Laporan pelamar
Route::get('/datapelamar', [LaporanPelamarController::class, 'datapelamar'])->middleware('auth');
Route::get('cetakpelamar', [LaporanPelamarController::class, 'cetakpelamar'])->name('cetakpelamar')->middleware('auth');
//Laporan penerimaan
Route::get('/penerimaan', [LaporanPenerimaanController::class, 'datapenerimaan'])->middleware('auth');
Route::get('cetak', [LaporanPenerimaanController::class, 'cetaklamaran'])->name('cetak')->middleware('auth');
//Laporan Caffe
Route::get('/datacaffe', [LaporanCaffeController::class, 'laporancaffe'])->name('datacaffe')->middleware('auth');
Route::get('print', [LaporanCaffeController::class, 'cetakcaffe'])->name('print')->middleware('auth');
//Laporan Lowongan
Route::get('/lowongan', [LaporanLowonganController::class, 'datalowongan'])->middleware('auth');
Route::get('cetaklowongan', [LaporanLowonganController::class, 'cetaklowongan'])->name('cetaklowongan')->middleware('auth');

Route::get('cetakcaffe', [LaporanCaffeController::class, 'cetakcaffe'])->name('cetakcaffe')->middleware('auth');
Route::get('caffepdf', [AdminController::class, 'cetakcaffe'])->name('cetakcaffe')->middleware('auth');
