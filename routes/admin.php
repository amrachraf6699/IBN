<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\SlidersController;
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
Route::get('' , HomeController::class)->name('home');

Route::resource('sliders' , SlidersController::class)->except('show');
Route::get('sliders/toggle/{slider}', [SlidersController::class, 'toggle'])->name('sliders.toggle');

Route::group(['prefix' => 'settings', 'as' => 'settings.' , 'controller' => SettingsController::class], function () {
    //Social Settings
    Route::get('social' , 'getSocial')->name('social');
    Route::post('social' , 'updateSocial');

    //Mail Settings
    Route::get('mail', 'getMail')->name('mail');
    Route::post('mail', 'updateMail');
    Route::post('mail/test', 'testMail')->name('test-mail');

    //Website Settings
    Route::get('website', 'getWebsite')->name('website');
    Route::post('website', 'updateWebsite');
}); 