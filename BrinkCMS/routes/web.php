<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

    // Articles

    // Categories

    // Tags

    // Authors

    // Pages

    /**
     * Auth and user account routes
     */
    Route::middleware('auth')->group(function () {
        // Route for upon user login (goes to homepage)
        Route::get('/', function () {
            return view('homepage');
        })->middleware(['verified'])->name('dashboard');
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
