<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PengaduanController;
use App\Http\Controllers\Admin\TanggapanController;
use App\Http\Controllers\Admin\PetugasController;
use App\Http\Controllers\Admin\MasyarakatController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\User\UserController;
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
Route::get('/', [UserController::class, 'index'])->name('pekat.index');

Route::post('/login/auth', [UserController::class, 'login'])->name('pekat.login');
Route::post('/logout/auth', [UserController::class, 'logout'])->name('pekat.logout');
    //REgister
    Route::get('/register', [UserController::class, 'formRegister'])->name('pekat.formRegister');
    Route::post('/register/auth', [UserController::class, 'register'])->name('pekat.register');

    Route::post('/store', [UserController::class, 'storePengaduan'])->name('pekat.store');
    Route::get('/laporan/{siapa?}', [UserController::class, 'laporan'])->name('pekat.laporan');

    Route::get('/logout', [UserController::class, 'logout'])->name('pekat.logout');
    // Route::get('/sbd', [AdminController::class, 'index'])->name('pekat.index');

Route::prefix('admin')->group(function (){

     Route::get('/', [AdminController::class, 'formLogin'])->name('admin.formLogin');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/logout', [AdminController::class, 'login'])->name('admin.logout');   

    //dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    //Pengaduan
    Route::resource('pengaduan', PengaduanController::class);

    //Petugas
    Route::resource('petugas', PetugasController::class);

    //Masyarakat
    Route::resource('masyarakat', MasyarakatController::class);

    //Laporan
    Route::get('laporan', [LaporanController::class, 'index'])->name('laporan.index');
    Route::post('getlaporan', [LaporanController::class, 'getLaporan'])->name('laporan.getLaporan');
    Route::get('laporan/cetak/{form}/{to}', [LaporanController::class, 'cetakLaporan'])->name('laporan.cetakLaporan');

     //Tanggapan
    Route::post('tanggapan/creatOrUpdate', [TanggapanController::class, 'createOrUpdate'])->name('tanggapan.createOrUpdate');
});
   
