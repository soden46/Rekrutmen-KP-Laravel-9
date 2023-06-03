<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\invesmenController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\EmailUndanganController;
use App\Http\Controllers\Laporan\LaporanCaffeController;
use App\Http\Controllers\Laporan\LaporanPelamarController;
use App\Http\Controllers\Laporan\LaporanPenerimaanController;
use App\Http\Controllers\Laporan\LaporanLowonganController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Pelamar\PelamarController;
use App\Http\Controllers\Pelamar\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DataKaryawanController;
use App\Http\Controllers\Admin\NewsAdminController;
use App\Http\Controllers\Admin\TambahCaffeController;
use App\Http\Controllers\LaporanPelamarController as ControllersLaporanPelamarController;
use FontLib\Table\Type\name;
use Illuminate\Support\Facades\Artisan;

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



Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::get('', [HomeController::class, 'index'])->middleware('guest');
Route::get('/home', [HomeController::class, 'index'])->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/authenticate', [LoginController::class, 'authenticate']);

Route::get('/recruitment', [HomeController::class, 'recruitment']);
Route::get('/detailrekrut/{judul}', [HomeController::class, 'detail']);
Route::get('/daftarberita', [NewsController::class, 'index']);
Route::get('/berita/{judul}', [NewsController::class, 'detail']);
Route::get('/faq', function () {
    return view('home.faq');
});
Route::get('/invesmen', function () {
    return view('home.invesment');
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
Route::get('/dashboard', [PelamarController::class, 'index'])->name('pelamar');
Route::get('/profil', [ProfileController::class, 'index'])->name('profil');
Route::get('/biodata', [ProfileController::class, 'biodata'])->name('biodata');
Route::post('/profile/update/{id}', [ProfileController::class, 'update'])->name('profile.update');
Route::post('/biodata', [ProfileController::class, 'save'])->name('biodata.save');
Route::POST('/lamar', [PelamarController::class, 'lamar'])->name('lamar');
Route::get('/status', [PelamarController::class, 'status'])->name('status');
Route::post('/lamarpekerjaan', [PelamarController::class, 'store'])->name('lamarpekerjaan');
Route::get('/pelamar/lowongan/', [PelamarController::class, 'lowongan'])->name('pelamar.lowongan');
//end user

//halaman news post admin
Route::resource('/admin/news/', NewsAdminController::class)->middleware(['can:admin']);
Route::post('/admin/news/store', [NewsAdminController::class, 'store'])->middleware(['can:admin']);
Route::get('/admin/news/CheckSlug', [NewsAdminController::class, 'CheckSlug'])->middleware(['can:admin']);

//tombol approval
Route::post('/terima/{id_lamaran}', [AdminController::class, 'terima'])->name('admin.terima')->middleware(['can:admin']);
Route::post('/tolak/{id_lamaran}', [AdminController::class, 'tolak'])->name('admin.tolak')->middleware(['can:admin']);
Route::post('/angkat/{id_lamaran}', [LaporanPenerimaanController::class, 'angkat'])->name('admin.angkat')->middleware(['can:admin']);
Route::post('/hapus/{id_lamaran}', [LaporanPenerimaanController::class, 'hapus'])->name('admin.hapus')->middleware(['can:admin']);
Route::post('/buka/{id_berita}', [AdminController::class, 'buka'])->name('admin.buka')->middleware(['can:admin']);
Route::post('/tutup/{id_berita}', [AdminController::class, 'tutup'])->name('admin.tutup')->middleware(['can:admin']);

//tombol edit & hapus caffe Admin
Route::get('/admin/edit/{id_caffe}', [AdminController::class, 'edit'])->name('admin.edit')->middleware(['can:admin']);
Route::post('/admin/destroy/{id_caffe}', [AdminController::class, 'destroy'])->name('admin.destroy')->middleware(['can:admin']);
Route::post('/admin/update/{id_caffe}', [AdminController::class, 'update'])->name('admin.update')->middleware(['can:admin']);


//email undangan
Route::get('emailundangan', [EmailUndanganController::class, 'index'])->name('emailundangan')->middleware(['can:admin']);
Route::post('kirimemail', [EmailUndanganController::class, 'kirimemail'])->name('kirimemail')->middleware(['can:admin']);
//
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('rekrutment', [AdminController::class, 'rekrutmen'])->name('rekrutment')->middleware(['can:admin']);
Route::get('/admin.lamaran', [AdminController::class, 'lamaran'])->middleware(['can:admin']);
Route::get('/logout', [LoginController::class, 'logout'])->name('guest');

//Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register');
Route::get('register/verify/{verify_key}', [RegisterController::class, 'verify'])->name('verify');

Route::get('/caffe', [AdminController::class, 'caffe'])->middleware(['can:admin']);

//Laporan pelamar
Route::get('/datapelamar', [LaporanPelamarController::class, 'datapelamar'])->middleware(['can:admin']);
Route::get('cetakpelamar', [LaporanPelamarController::class, 'cetakpelamar'])->name('cetakpelamar')->middleware(['can:admin']);
//Laporan penerimaan
Route::get('/penerimaan', [LaporanPenerimaanController::class, 'datapenerimaan'])->middleware(['can:admin']);
Route::get('cetak', [LaporanPenerimaanController::class, 'cetaklamaran'])->name('cetak')->middleware(['can:admin']);

//Laporan Caffe
Route::get('/datacaffe', [LaporanCaffeController::class, 'laporancaffe'])->name('datacaffe')->middleware(['can:admin']);
Route::get('print', [LaporanCaffeController::class, 'cetakcaffe'])->name('print')->middleware(['can:admin']);

//Laporan Lowongan
Route::get('/lowongan', [LaporanLowonganController::class, 'datalowongan'])->middleware(['can:admin']);
Route::get('cetaklowongan', [LaporanLowonganController::class, 'cetaklowongan'])->name('cetaklowongan')->middleware(['can:admin']);
Route::get('cetakcaffe', [LaporanCaffeController::class, 'cetakcaffe'])->name('cetakcaffe')->middleware(['can:admin']);

//data karyawan
Route::get('bento', [DataKaryawanController::class, 'bento'])->name('bento')->middleware(['can:admin']);
Route::get('/bento/cari', [DataKaryawanController::class, 'caribento'])->middleware('auth');
//kopi nuri
Route::get('nuri', [DataKaryawanController::class, 'nuri'])->name('nuri')->middleware(['can:admin']);
Route::get('/nuri/cari', [DataKaryawanController::class, 'carinuri'])->middleware(['can:admin']);
//nuansa kopi
Route::get('nuansa', [DataKaryawanController::class, 'nuansa'])->name('nuansa')->middleware(['can:admin']);
Route::get('/nuansa/cari', [DataKaryawanController::class, 'carinuansa'])->middleware(['can:admin']);
//stako kopi
Route::get('stako', [DataKaryawanController::class, 'stako'])->name('stako')->middleware(['can:admin']);
Route::get('/stako/cari', [DataKaryawanController::class, 'caristako'])->middleware(['can:admin']);
//kopisini
Route::get('kopisini', [DataKaryawanController::class, 'kopisini'])->name('kopisini')->middleware(['can:admin']);
Route::get('/kopisini/cari', [DataKaryawanController::class, 'carikopisini'])->middleware(['can:admin']);
//menoewa
Route::get('menoewa', [DataKaryawanController::class, 'menoewa'])->name('menoewa')->middleware(['can:admin']);
Route::get('/menoewa/cari', [DataKaryawanController::class, 'carimenoewa'])->middleware(['can:admin']);
//njati kopi
Route::get('njati', [DataKaryawanController::class, 'njati'])->name('njati')->middleware(['can:admin']);
Route::get('/njati/cari', [DataKaryawanController::class, 'carinjati'])->middleware(['can:admin']);
//kaktus kopi
Route::get('kaktus', [DataKaryawanController::class, 'kaktus'])->name('kaktus')->middleware(['can:admin']);
Route::get('/kaktus/cari', [DataKaryawanController::class, 'carikaktus'])->middleware(['can:admin']);
//easy breezy
Route::get('easy', [DataKaryawanController::class, 'easy'])->name('easy')->middleware(['can:admin']);
Route::get('/easy/cari', [DataKaryawanController::class, 'carieasy'])->middleware(['can:admin']);
//river garden
Route::get('river', [DataKaryawanController::class, 'river'])->name('river')->middleware(['can:admin']);
Route::get('/river/cari', [DataKaryawanController::class, 'caririver'])->middleware(['can:admin']);
//pendopo malioboro
Route::get('pendopo', [DataKaryawanController::class, 'pendopo'])->name('pendopo')->middleware(['can:admin']);
Route::get('/pendopo/cari', [DataKaryawanController::class, 'caripendopo'])->middleware(['can:admin']);

//Tambah Caffe
Route::get('/tambahcaffe', [TambahCaffeController::class, 'index'])->middleware(['can:admin']);
Route::post('/storecaffe', [TambahCaffeController::class, 'tambahcaffe'])->name('storecaffe')->middleware(['can:admin']);
