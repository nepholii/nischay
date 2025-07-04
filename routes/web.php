<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\PlaysController;
use App\Http\Controllers\SportsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NotificationsController;


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/test', [HomeController::class, 'index']);


Route::get('/movies', [MoviesController::class, 'index'])->name('movies');
Route::get('/events', [EventsController::class, 'index'])->name('events');
Route::get('/plays', [PlaysController::class, 'index'])->name('plays');
Route::get('/sports', [SportsController::class, 'index'])->name('sports');


Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/notifications', [NotificationsController::class, 'index'])->name('notifications');

Route::get('/master', function () {
    return view('master');
})->name('theatres');


// Route::get('/bookings', function () {
//     return view('bookings');
// })->name('bookings');


// Route::get('/profile', function () {
//     return view('profile');
// })->name('profile');


// Route::get('/offers', function () {
//     return view('offers');
// })->name('offers');


// Route::get('/notifications', function () {
//     return view('notifications');
// })->name('notifications');


// Route::get('/support', function () {
//     return view('support');
// })->name('support');


// Route::get('/settings', function () {
//     return view('settings');
// })->name('settings');
