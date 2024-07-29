<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('super-admin')->group(function(){
    include "_/super_admin.php";
});

Route::prefix('admin')->group(function(){
    include "_/admin.php";
});


Route::prefix('/')->group(function(){
    include "_/base.php";
});

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'loginproses']);
Route::get('logout', [LoginController::class, 'logout']);