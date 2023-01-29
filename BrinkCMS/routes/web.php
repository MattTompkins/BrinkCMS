<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;

/** Homepage */
Route::get('/', function () {
    return view('homepage');
});


/** Frontend Routes */


/** Auth Routes */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




/** Backend Routes - New middleware required to block off to those without permission, and return a 404 */
Route::middleware('auth')->group(function () {
    Route::get('/admin', [DashboardController::class, 'view'])->name('backend.dashboard');
    Route::get('/admin/dashboard', [DashboardController::class, 'view'])->name('backend.dashboard');
    //  /admin = /dashboard
    // /admin/dashboard
    // /admin/categories
    // /admin/tags
    // /admin/posts

    // /admin/pages
    // /admin/settings
    // /admin/nalytics
    // /admin/users
});

require __DIR__ . '/auth.php';
