<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\NotificationController;

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

Route::get('/', [HomeController::class,'index'])->name('index');

Route::get('/dashboard', [JobController::class, 'index'])->middleware(['auth', 'verified'])->name('offer.index');
Route::get('/offer/create', [JobController::class, 'create'])->middleware(['auth', 'verified'])->name('offer.create');
Route::get('/offer/{job}/edit', [JobController::class, 'edit'])->middleware(['auth', 'verified'])->name('offer.edit');
Route::get('/offer/{job}', [JobController::class, 'show'])->name('offer.show');
Route::get('/candidates/{job}',[CandidateController::class, 'index'])->name('candidates.index');

Route::get('/notifications', NotificationController::class)->middleware('auth','verified','role.recruiter')->name('notifications');

require __DIR__.'/auth.php';