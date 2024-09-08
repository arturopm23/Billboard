<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\ShowTime;
use App\Models\Theater;
use Illuminate\Support\Facades\Route;


class ShowTimeController extends Controller {

    public function create(){
        $movies = Movie::all();
        $theaters = Theater::all();
        return view ('showtimes.create', [ 'movies' => $movies, 'theaters' => $theaters]);
    }

    public function store(){
            request()->validate([
                'movie_id' => ['required|exists:,movies,movie_id'],
                'theater_id' => ['required|exists:theaters,theater_id'],
                'show_hour' => ['required'],
                'show_day' => ['required']
            ]);
        
            ShowTime::create([
                'movie_id' => request('movie_id'),
                'theater_id' =>  request('theater_id'),
                'show_hour' =>  request('show_hour'),
                'show_day' =>  request('show_day')
            ]);
            return redirect('/');
}

    public function delete($id){
        $showtime = ShowTime::findOrFail($id);
        $showtime->delete();
        return redirect('/');
    }
}