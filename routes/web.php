<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

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
    return redirect()->route('login');
});

Route::get('/dashboard', [JobController::class, 'index'])->middleware(['auth', 'verified'])->name('offer.index');
Route::get('/offer/create', [JobController::class, 'create'])->middleware(['auth', 'verified'])->name('offer.create');
Route::get('/offer/{job}/edit', [JobController::class, 'edit'])->middleware(['auth', 'verified'])->name('offer.edit');
Route::get('/offer/{job}', [JobController::class, 'show'])->name('offer.show');

require __DIR__.'/auth.php';