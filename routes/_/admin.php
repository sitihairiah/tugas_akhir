<?php

use App\Http\Controllers\Admin\BaseController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\LelangController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:admin'], function () {

    Route::get('/', [BaseController::class, 'index']);
    
    Route::resource('lelang', LelangController::class);

    Route::resource('berita', BeritaController::class);
    Route::put('berita/publis/{berita}', [BeritaController::class, 'publis']);
    Route::put('berita/arsip/{berita}', [BeritaController::class, 'arsip']);



});