<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/daftar', [App\Http\Controllers\Core\FrontendController::class, 'register']);
Route::get('/cities/{id}', [App\Http\Controllers\Core\FrontendController::class, 'cities']);
Route::get('/districts/{id}', [App\Http\Controllers\Core\FrontendController::class, 'districts']);
Route::get('/villages/{id}', [App\Http\Controllers\Core\FrontendController::class, 'villages']);
