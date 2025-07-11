<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MoviesController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\FavouriteController;
use App\Http\Controllers\Admin\WatchlistController;

// Redirect root to admin dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Admin Routes
Route::prefix('admin')->group(function () {

   
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

  
    Route::resource('movies', MoviesController::class)->names('admin.movies');

  
    Route::resource('genres', GenreController::class)->names('admin.genres');

 
    Route::resource('users', UserController::class)->names('admin.users');

    
});
