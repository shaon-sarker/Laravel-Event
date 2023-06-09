<?php

use App\Http\Controllers\backend\CateringController;
use App\Http\Controllers\backend\CreativePanelController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\DecorationController;
use App\Http\Controllers\backend\EventOrganaizerController;
use App\Http\Controllers\backend\EventScheduleController;
use App\Http\Controllers\backend\JobPortalController;
use App\Http\Controllers\backend\SearchController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\SmsController;
use App\Http\Controllers\backend\VanueController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
    // return view('layouts.backend.dashboard');
});
Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/catering',CateringController::class);
Route::resource('/decoration',DecorationController::class);
Route::resource('/creativepanel',CreativePanelController::class);
Route::resource('/vanue',VanueController::class);
Route::resource('/service',ServiceController::class);
Route::resource('/jobportal',JobPortalController::class);
Route::resource('/eventorganaizer',EventOrganaizerController::class);
Route::resource('/customer',CustomerController::class);


Route::get('/vanuelist',[SearchController::class,'vanuelist'])->name('vanues.list');
Route::get('/servicelist/list',[SearchController::class,'servicelist'])->name('services.list');
Route::get('/eventschule',[EventScheduleController::class,'create'])->name('event.create');
Route::post('/eventschule/insert',[EventScheduleController::class,'store'])->name('event.store');
Route::get('/sms',[SmsController::class,'index'])->name('sms.create');
Route::get('/sms/info',[SmsController::class,'show'])->name('sms.info');













require __DIR__.'/auth.php';
