<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Pelamar\PelamarController;
use App\Http\Controllers\Admin\AdminController;

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

    //Route View

    Route::view('/404-page', 'admin.404-page')->name('404-page');
    Route::view('/blank-page', 'admin.blank-page')->name('blank-page');
    Route::view('/buttons', 'admin.buttons')->name('buttons');
    Route::view('/cards', 'admin.cards')->name('cards');
    Route::view('/utilities-colors', 'admin.utilities-color')->name('utilities-colors');
    Route::view('/utilities-borders', 'admin.utilities-border')->name('utilities-borders');
    Route::view('/utilities-animations', 'admin.utilities-animation')->name('utilities-animations');
    Route::view('/utilities-other', 'admin.utilities-other')->name('utilities-other');
    Route::view('/chart', 'admin.chart')->name('chart');
    Route::view('/tables', 'admin.tables')->name('tables');
});
//end admin

//user
Route::group(['namespace' => 'Pelamar', 'middleware' => 'auth', 'prefix' => 'pelamar'], function () {
    Route::get('/', [PelamarController::class, 'index'])->name('pelamar');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::patch('/profile/update/{pelamar}', [ProfileController::class, 'update'])->name('profile.update');
});
//end user

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/lamaran', [PelamarController::class, 'lamar'])->middleware('auth');
Route::get('/status', [PelamarController::class, 'status'])->middleware('auth');
Route::post('/lamarpekerjaan', [PelamarController::class, 'store'])->name('lamarpekerjaan');
Route::get('/admin.lamaran', [AdminController::class, 'lamaran'])->middleware('auth');
// Route::get('/admin', [HrdController::class, 'index']);
Route::get('/logout', [LoginController::class, 'logout'])->name('guest');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register');
