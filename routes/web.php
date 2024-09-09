<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\ShowTimeController;
use App\Http\Controllers\TheaterController;
use Illuminate\Support\Facades\Route;

//HOME PAGE
Route::get('/', function () {
    return view('welcome');
});

//CONTACT PAGE
Route::get('/contact', function () {
    return view('contact');
});

//MOVIE ROUTES
//movie index
Route::get('/movie', [MovieController::class, 'index']);
//create movie
Route::get('/movie/create', [MovieController::class, 'create']);
//show movie
Route::get('/movie/{id}', [MovieController::class, 'show']);
//store movie
Route::post('/movie', [MovieController::class, 'store']);
//edit movie
Route::get('/movie/{id}/edit', [MovieController::class, 'edit']);
//update movie
Route::patch('/movie/{id}', [MovieController::class, 'update']);
//destroy movie
Route::delete('/movie/{id}/remove', [MovieController::class, 'delete']);

//THEATER ROUTES
//theater index
Route::get('/theater', [TheaterController::class, 'index']);
//create theater
Route::get('/theater/create', [TheaterController::class, 'create']);
//show theater
Route::get('/theater/{id}', [TheaterController::class, 'show']);
//store theater
Route::post('/theater', [TheaterController::class, 'store']);
//edit theater
Route::get('/theater/{id}/edit', [TheaterController::class, 'edit']);
//update theater
Route::patch('/theater/{id}', [TheaterController::class, 'update']);
//destroy theater
Route::delete('/theater/{id}/remove', [TheaterController::class, 'delete']);

// SHOWTIME ROUTES
// Index
Route::get('/showtime', [ShowTimeController::class, 'index'])->name('showtimes.index');
// Create
Route::get('/showtime/create', [ShowTimeController::class, 'create'])->name('showtimes.create');
// Show
Route::get('/showtime/{id}', [ShowTimeController::class, 'show'])->name('showtimes.show');
// Store
Route::post('/showtime', [ShowTimeController::class, 'store'])->name('showtimes.store');
// Edit
Route::get('/showtime/{id}/edit', [ShowTimeController::class, 'edit'])->name('showtimes.edit');
// Update
Route::patch('/showtime/{id}', [ShowTimeController::class, 'update'])->name('showtimes.update');
// Destroy
Route::delete('/showtime/{id}', [ShowTimeController::class, 'destroy'])->name('showtimes.destroy');