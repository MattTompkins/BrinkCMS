<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/** Homepage */
Route::get('/', function () {
    return view('welcome');
});


/** Frontend Routes */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/** Auth Routes */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


/** Backend Routes */


require __DIR__ . '/auth.php';
