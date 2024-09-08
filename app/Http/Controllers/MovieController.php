<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;

class MovieController extends Controller {

    public function index(){
        $movies = Movie::with('showTime')->latest()->paginate(8);
        return view('movies.index', [ 'movies' => $movies]);
    }

    public function create(){
        return view ('movies.create');
    }

    public function store(){

    request()->validate([
        'title' => ['required'],
        'director' => ['required'],
        'protagonist' => ['required'],
        'duration' => ['required', 'digits_between:1,3'],
        'synopsis' => ['required', 'min:80'],
        'release' => ['required', 'date_format:m/d/Y'],
        'poster' => ['nullable|image|mimes:jpeg,png,jpg,gif|max:2048'],
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

}

    public function show($id){
        $movie = Movie::findOrFail($id);
        return view('movies.show', ['movie' => $movie]);
    }

    public function edit($id){
    $movie = Movie::findOrFail($id);
    return view('movies.edit', ['movie' => $movie]);
    }

    public function update($id){

        $movie = Movie::findOrFail($id);

        request()->validate([
            'title' => ['required'],
            'director' => ['required'],
            'protagonist' => ['required'],
            'duration' => ['required', 'digits_between:1,3'],
            'synopsis' => ['required', 'min:80'],
            'release' => ['required', 'date_format:m/d/Y'],
            'poster' => ['nullable|image|mimes:jpeg,png,jpg,gif|max:2048'],
            'genre' => ['required', 'min:5']
        ]);

        $movie->update([
            'title' => request('title'),
            'director' =>  request('director'),
            'protagonist' =>  request('protagonist'),
            'duration' =>  request('duration'),
            'synopsis' =>  request('synopsis'),
            'release' =>  request('release'),
            'poster' =>  request('poster'),
            'genre' =>  request('genre')
        ]);

        return redirect('/movie/' . $movie->id);
    }

    public function delete($id){
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return redirect('/movie');
    }
}