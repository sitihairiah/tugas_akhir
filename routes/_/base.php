<?php

use App\Http\Controllers\Base\BaseController;
use App\Http\Controllers\Base\BeritaController;
use App\Http\Controllers\Base\LelangController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BaseController::class, 'index']);
Route::get('contact', [BaseController::class, 'contact']);
Route::get('profil', [BaseController::class, 'profil']);

Route::resource('berita', BeritaController::class);
Route::resource('lelang', LelangController::class);
Route::get('lelang/detail/{jenis_upc}', [LelangController::class, 'detail']);