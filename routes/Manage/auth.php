<?php

use App\Http\Controllers\Manage\Auth\LoginController;
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
Route::view('login' , 'manage.auth.login')->name('manage.login');
Route::post('login' , LoginController::class);
Route::view('test' , 'manage.auth.test')->name('manage.test');