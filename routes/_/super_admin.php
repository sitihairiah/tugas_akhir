<?php

use App\Http\Controllers\SuperAdmin\AdminController;
use App\Http\Controllers\SuperAdmin\ArsipController;
use App\Http\Controllers\SuperAdmin\BaseController;
use App\Http\Controllers\SuperAdmin\BeritaController;
use App\Http\Controllers\SuperAdmin\CustomerController;
use App\Http\Controllers\SuperAdmin\FormulirAplikasiController;
use App\Http\Controllers\SuperAdmin\FormulirPermohonanController;
use App\Http\Controllers\SuperAdmin\JenisUpcPegadaianController;
use App\Http\Controllers\SuperAdmin\LelangController;
use App\Http\Controllers\SuperAdmin\SlideController;
use App\Http\Controllers\SuperAdmin\SuperAdminController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:super-admin'], function () {
    Route::get('/', [BaseController::class, 'index']);

    Route::resource('x', SuperAdminController::class);
    Route::resource('admin', AdminController::class);

    Route::resource('berita', BeritaController::class);
    Route::put('berita/publis/{berita}', [BeritaController::class, 'publis']);
    Route::put('berita/arsip/{berita}', [BeritaController::class, 'arsip']);

    Route::resource('lelang', LelangController::class);
    Route::resource('slide', SlideController::class);

});