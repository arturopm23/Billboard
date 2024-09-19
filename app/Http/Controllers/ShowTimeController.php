<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\ShowTime;
use App\Models\Theater;

class ShowTimeController extends Controller
{
    public function create() {
        $movies = Movie::all();
        $theaters = Theater::all();
        return view('showtimes.create', ['movies' => $movies, 'theaters' => $theaters]);
    }

    public function index() {
        $showtimes = ShowTime::orderBy('show_day', 'desc')
                     ->orderBy('show_hour', 'desc')
                     ->with('movie', 'theater') // Ensure the movie and theater relationships are eager loaded
                     ->get();
        return view('showtimes.index', compact('showtimes'));
    }
    
    public function show($id) {
        $showtime = ShowTime::with('movie', 'theater')->findOrFail($id);
        return view('showtimes.show', compact('showtime'));
    }
    
    public function store() {
        // Validate request data
        request()->validate([
            'movie_id' => ['required', 'exists:movies,id'],
            'theater_id' => ['required', 'exists:theaters,id'],
            'show_hour' => ['required'],
            'show_day' => ['required', 'date']
        ]);

        // Store the new showtime
        ShowTime::create([
            'movie_id' => request('movie_id'),
            'theater_id' => request('theater_id'),
            'show_hour' => request('show_hour'),
            'show_day' => request('show_day')
        ]);

        // Redirect to index with success message
        return redirect()->route('showtimes.index')->with('success', 'Showtime created successfully');
    }

    public function edit($id) {
        $showtime = ShowTime::findOrFail($id);
        $showtime->show_day = \Carbon\Carbon::parse($showtime->show_day); // Convert to DateTime if it's not already
        $movies = Movie::all();
        $theaters = Theater::all();
        return view('showtimes.edit', [
            'showtime' => $showtime,
            'movies' => $movies,
            'theaters' => $theaters
        ]);
    }
    
    
    public function update($id) {
        // Validate request data
        request()->validate([
            'movie_id' => ['required', 'exists:movies,id'],
            'theater_id' => ['required', 'exists:theaters,id'],
            'show_hour' => ['required'],
            'show_day' => ['required', 'date']
        ]);
    
        // Find the showtime and update it
        $showtime = ShowTime::findOrFail($id);
        $showtime->update([
            'movie_id' => request('movie_id'),
            'theater_id' => request('theater_id'),
            'show_hour' => request('show_hour'),
            'show_day' => request('show_day')
        ]);
    
        // Redirect to index with success message
        return redirect()->route('showtimes.index')->with('success', 'Showtime updated successfully');
    }
    

    public function destroy($id) {
        // Find showtime by ID and delete
        $showtime = ShowTime::findOrFail($id);
        $showtime->delete();

        // Redirect to index with success message
        return redirect()->route('showtimes.index')->with('success', 'Showtime deleted successfully');
    }
}
