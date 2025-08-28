<?php

use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\ApplicationsController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\InviteController;
use App\Http\Controllers\Frontend\JobsController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\OurTeamController;
use App\Http\Controllers\Frontend\PartnersController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\SwitchLanguageController;
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

Route::get('/' , HomeController::class)->name('home');
Route::get('jobs' , [JobsController::class , 'index'])->name('jobs');
Route::get('jobs/{job:slug}' , [JobsController::class , 'show'])->name('job.show');
Route::post('jobs/{job:slug}' , [JobsController::class , 'apply'])->name('job.apply');
Route::get('our-team' , OurTeamController::class)->name('our_team');

Route::get('services' , [ServicesController::class , 'index'])->name('services');
Route::get('services/{service:slug}' , [ServicesController::class , 'show'])->name('service.show');
Route::get('partners' , PartnersController::class)->name('partners');
Route::get('about-us' , AboutUsController::class)->name('about_us');
Route::view('contact-us' , 'frontend.contact_us')->name('contact_us');
Route::post('contact-us' , ContactUsController::class)->name('contact_us.send');


Route::get('news' , [NewsController::class , 'index'])->name('news');
Route::get('news/{news:slug}' , [NewsController::class , 'show'])->name('news.show');

Route::get('invite/{token}' ,[InviteController::class , 'index'])->name('invite');
Route::get('application/{uuid}' ,[ApplicationsController::class , 'check'])->name('check.invite');
Route::get('lang/{lang}' , SwitchLanguageController::class)->name('lang.switch');