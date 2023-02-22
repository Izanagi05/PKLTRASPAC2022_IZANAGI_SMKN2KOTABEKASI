<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Muridcontroller;

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


Route::get('/', function () {
    return view('welcome');
});
Route::get('/tampil', [Muridcontroller::class, 'index']);
Route::get('/tampil/{id}', [Muridcontroller::class, 'show']);
Route::post('/tampil/add', [Muridcontroller::class, 'insert']);
Route::post('/tampil/update', [Muridcontroller::class, 'update']);
Route::delete('/tampil/delete/{id}', [Muridcontroller::class, 'destroy']);
