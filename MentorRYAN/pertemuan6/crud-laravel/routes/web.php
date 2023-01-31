<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TabelmuridController;


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

// Route::get('/crud', function () {
//     return view('crud');
// });
Route::resource('/crud', TabelmuridController::class);
// Route::get('/crud/search', [TabelmuridController::class, 'cari']);
// Route::resource('/crud/tambahdata', TabelmuridController::class);
// Route::get('/crud/tambahdata', [TabelmuridController::class], 'create');
