<?php

use App\Models\Movie;
use App\Models\Theater;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movie', function () {
    return view('movies', [ 'movies' => Movie::all()]);
});

Route::get('/movie/{id}', function ($id) {
    $movie = Movie::find($id);
    return view('movie', ['movie' => $movie]);
});


Route::get('/theater', function () {
    return view('theaters', [ 'theaters' => Theater::all()]);
});

Route::get('/theater/{id}', function ($id) {
    $theater = Theater::find($id);
    return view('theater', ['theater' => $theater]);
});


Route::get('/contact', function () {
    return view('contact');
});
