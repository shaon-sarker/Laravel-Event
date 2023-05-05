<?php

use App\Http\Controllers\backend\CateringController;
use App\Http\Controllers\backend\CreativePanelController;
use App\Http\Controllers\backend\DecorationController;
use App\Http\Controllers\backend\ServiceController;
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
// Route::get('/profile',function(){
//     return view('backend.profile.index');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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





require __DIR__.'/auth.php';
