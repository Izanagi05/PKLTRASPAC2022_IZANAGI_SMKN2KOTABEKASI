<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowDataController;
use App\Http\Controllers\HalAdminController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;

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
    return view('welcome');
});
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');;
Route::post('/postlogin', [LoginController::class, 'ceklogin']);
Route::get('/logout', [LoginController::class, 'logout']);


Route::middleware(['auth', 'cekklevel:admin'])->group(function () {
    Route::get('/home/haladmin', [HalAdminController::class,'index']);
    Route::resource('/home/haladmin/berita', BeritaController::class);
    Route::resource('/home/haladmin/projek', ProjectController::class);
});

Route::middleware(['auth', 'cekklevel:admin,user'])->group(function () {
    Route::get('/home', [ShowDataController::class,'index']);
});
