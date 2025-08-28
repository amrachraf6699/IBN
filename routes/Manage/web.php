<?php

use App\Http\Controllers\Manage\AdminsController;
use App\Http\Controllers\Manage\ApplicationsController;
use App\Http\Controllers\Manage\BlogsController;
use App\Http\Controllers\Manage\ClientsController;
use App\Http\Controllers\Manage\HomeController;
use App\Http\Controllers\Manage\InvitationsController;
use App\Http\Controllers\Manage\Jobs\CategoriesController;
use App\Http\Controllers\Manage\Jobs\JobsController;
use App\Http\Controllers\Manage\NewsController;
use App\Http\Controllers\Manage\ProjectsController;
use App\Http\Controllers\Manage\ServicesController;
use App\Http\Controllers\Manage\SettingsController;
use App\Http\Controllers\Manage\TeamController;
use App\Http\Controllers\Manage\ContactController;
use App\Http\Controllers\Manage\SlidersController;
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
Route::get('',HomeController::class)->name('home');
Route::get('settings' , [SettingsController::class , 'index'])->name('settings');
Route::put('settings' , [SettingsController::class , 'updateGeneral'])->name('settings.updateGeneral');
Route::put('settings/contact' , [SettingsController::class , 'updateContact'])->name('settings.updateContact');
Route::put('settings/statstics' , [SettingsController::class , 'updateStatistics'])->name('settings.updateStatistics');

Route::resource('blogs' , BlogsController::class);
Route::resource('clients' , ClientsController::class);
Route::resource('news' , NewsController::class);
Route::resource('projects' , ProjectsController::class);
Route::resource('admins' , AdminsController::class);
Route::resource('services' , ServicesController::class);
Route::resource('team' , TeamController::class);
Route::resource('sliders' , SlidersController::class);
Route::resource('contact' , ContactController::class);
Route::post('contact/{contact}/reply' , [ContactController::class , 'reply'])->name('contact.reply');

Route::resource('categories' , CategoriesController::class);
Route::resource('jobs' , JobsController::class);
Route::get('jobs/{job}/invite' , [JobsController::class , 'invite'])->name('jobs.invite');
Route::post('jobs/{job}/invite' , [JobsController::class , 'sendInvite'])->name('jobs.sendInvites');
Route::get('jobs/{job}/change-status' , [JobsController::class , 'changeStatus'])->name('jobs.changeStatus');

Route::delete('invitation/{invitation}' , [InvitationsController::class , 'delete'])->name('invitation.delete');

Route::get('applications/{application}' , [ApplicationsController::class , 'show'])->name('application.show');
Route::post('applications/{application}/set-time' , [ApplicationsController::class , 'setTime'])->name('application.set-time');
Route::delete('applications/{application}' , [ApplicationsController::class , 'delete'])->name('application.delete');
Route::patch('applications/{application}' , [ApplicationsController::class , 'update'])->name('application.update-status');