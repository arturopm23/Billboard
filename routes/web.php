<?php

use App\Models\Movie;
use App\Models\Theater;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movie', function () {
    $movies = Movie::with('showTime')->latest()->paginate(8);
    return view('movies.index', [ 'movies' => $movies]);
});

Route::get('/movie/create', function () {
   return view('movies.create');
});


Route::get('/movie/{id}', function ($id) {
    $movie = Movie::find($id);
    return view('movies.show', ['movie' => $movie]);
});

Route::post('/movie', function (){
    request()->validate([
        'title' => ['required'],
        'director' => ['required'],
        'protagonist' => ['required'],
        'duration' => ['required', 'digits_between:1,3'],
        'synopsis' => ['required', 'min:80'],
        'release' => ['required', 'date_format:m-d-Y'],
        'poster' => ['required'],
        'genre' => ['required', 'min:5']
    ]);
    

    Movie::create([
        'title' => request('title'),
        'director' =>  request('director'),
        'protagonist' =>  request('protagonist'),
        'duration' =>  request('duration'),
        'synopsis' =>  request('synopsis'),
        'release' =>  request('release'),
        'poster' =>  request('poster'),
        'genre' =>  request('genre')
    ]);
    return redirect('/movie');
});

Route::get('/theater', function () {
    $theaters = Theater::with('showTime')->simplePaginate(4);
    return view('theaters.index', [ 'theaters' => $theaters]);
});

Route::get('/theater/create', function () {
    return view('theaters.create');
});

Route::get('/theater/{id}', function ($id) {
    $theater = Theater::find($id);
    return view('theaters.show', ['theater' => $theater]);
});


Route::get('/contact', function () {
    return view('contact');
});
