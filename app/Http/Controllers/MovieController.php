<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $sortBy = $request->input('sort_by', 'title');
        $orderBy = $request->input('order_by', 'asc'); // Default to ascending
    
        $movies = Movie::orderBy($sortBy, $orderBy)->paginate(10);
    
        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => ['required'],
            'director' => ['required'],
            'protagonist' => ['required'],
            'duration' => ['required', 'digits_between:1,3'],
            'synopsis' => ['required', 'min:80'],
            'release' => ['required', 'date_format:Y-m-d'], // Corrected date format
            'poster' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'genre' => ['required', 'min:5']
        ]);

        // Handle file upload
        $fileName = null;
        if ($request->hasFile('poster')) {
            $fileName = time() . '.' . $request->poster->extension();
            $request->poster->move(public_path('images/movie'), $fileName);
        }

        // Create the movie
        Movie::create([
            'title' => $request->title,
            'director' => $request->director,
            'protagonist' => $request->protagonist,
            'duration' => $request->duration,
            'synopsis' => $request->synopsis,
            'release' => $request->release,
            'poster' => $fileName,
            'genre' => $request->genre
        ]);

        return redirect('/movie')->with('success', 'Movie created successfully.');
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.show', ['movie' => $movie]);
    }

    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.edit', ['movie' => $movie]);
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'title' => ['required'],
            'director' => ['required'],
            'protagonist' => ['required'],
            'duration' => ['required', 'digits_between:1,3'],
            'synopsis' => ['required', 'min:80'],
            'release' => ['required', 'date_format:Y-m-d'], // Corrected date format
            'poster' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'genre' => ['required', 'min:5']
        ]);

        $movie = Movie::findOrFail($id);

        // Handle file upload
        if ($request->hasFile('poster')) {
            $fileName = time() . '.' . $request->poster->extension();
            $request->poster->move(public_path('images/movie'), $fileName);
        } else {
            $fileName = $movie->poster; // Retain existing poster if no new file is uploaded
        }

        // Update the movie
        $movie->update([
            'title' => $request->title,
            'director' => $request->director,
            'protagonist' => $request->protagonist,
            'duration' => $request->duration,
            'synopsis' => $request->synopsis,
            'release' => $request->release,
            'poster' => $fileName,
            'genre' => $request->genre
        ]);

        return redirect('/movie/' . $movie->id)->with('success', 'Movie updated successfully.');
    }

    public function delete($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return redirect('/movie')->with('success', 'Movie deleted successfully.');
    }
}
