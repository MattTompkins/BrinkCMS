<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomepageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\Frontend\ArticleController;


// Backend routes
Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('/admin', function () {
        return view('backend.dashboard');
    });
    // Article routes

    // Category Routes

    // Tag Routes

});

// Front end & Auth routes
Route::middleware('splade')->group(function () {

    /**
     * Standard site routes
     */
    Route::get('/', function () {
        return view('homepage');
    });

    Route::get('/', [HomepageController::class, 'index'])->name('home');

    // Articles
    Route::get('/article/{slug}', [ArticleController::class, 'display']);

    // Categories, Categories and Authors
    Route::get('/category/{slug}', [CategoryController::class, 'display']);
    Route::get('/tag/{slug}', [TagController::class, 'display']);

    // TO DO: logic for authors to be determined between models and controller 
    //  -  uses standard user data but will draw details from another table to
    //     keep users DB table clear of said data

    // Pages ( To use several templates, predetermined by a setting in the BE )

    /**
     * Auth and user account routes
     */
    Route::middleware('auth')->group(function () {
        // Route for upon user login (goes to homepage)
        Route::get('/', [HomepageController::class, 'index'])->middleware(['verified'])->name('dashboard');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });


    /**
     * Utility for Splade
     */

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();
    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();
    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();


    require __DIR__ . '/auth.php';
});
