<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstansiController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\SetApplicationController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionOutController;
use App\Http\Controllers\WalletController;

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
    return redirect('/login');
});

Route::middleware(['middleware' => 'PreventBackHistory'])->group(function () {
    Auth::routes();
});

Route::get('/set-application', [SetApplicationController::class, 'setapplication'])->name('set-application');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'PreventBackHistory']], function () {
    Route::post('/saldo/update', [WalletController::class, 'store'])->name('wallet.store');
    Route::get('/saldo/log', [WalletController::class, 'index'])->name('wallet.log');
    Route::post('/karyawan/store', [KaryawanController::class, 'store'])->name('karyawan.store');
    Route::post('/karyawan/destroy', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');
    Route::post('/instansi/store', [InstansiController::class, 'store'])->name('instansi.store');
    Route::post('/instansi/destroy', [InstansiController::class, 'destroy'])->name('instansi.destroy');
    Route::post('/transaksiMasuk/service/store', [TransactionController::class, 'servicestore'])->name('transaction.servicestorein');
    Route::post('/transaksiMasuk/kasbon/store', [TransactionController::class, 'kasbonstore'])->name('transaction.kasbonstorein');


    Route::post('/transaksiKeluar/service/store', [TransactionOutController::class, 'servicestore'])->name('transaction.servicestoreout');
    Route::post('/transaksiKeluar/operasional/store', [TransactionOutController::class, 'operasionalstore'])->name('transaction.operasionalstoreout');
    Route::post('/transaksiKeluar/kasbon/store', [TransactionOutController::class, 'kasbonstore'])->name('transaction.kasbonstoreout');
    Route::post('/transaksiKeluar/event/store', [TransactionOutController::class, 'eventstore'])->name('transaction.eventstoreout');
});

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('setting', [AdminController::class, 'setting'])->name('admin.setting');
    Route::get('instansi', [AdminController::class, 'instansi'])->name('admin.instansi');
});

Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('setting', [UserController::class, 'setting'])->name('user.setting');
    Route::get('instansi', [UserController::class, 'instansi'])->name('user.instansi');
});
