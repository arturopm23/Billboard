<?php

namespace App\Http\Controllers;
use App\Models\Theater;
use Illuminate\Support\Facades\Route;

class TheaterController extends Controller {

    public function index(){
        $theaters = Theater::latest()->simplePaginate(4);
        return view('theaters.index', [ 'theaters' => $theaters]);
    }

    public function create(){
        return view ('theaters.create');
    }

    public function store() {

        request()->validate([
            'name' => 'required',
            'poster' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'threeD' => 'boolean',
            'dolby' => 'boolean'
        ]);
    
        $fileName = null;
        if (request()->hasFile('poster')) {
            $fileName = time() . '.' . request()->poster->extension();
            request()->poster->move(public_path('images/theater'), $fileName);
        }
    
        Theater::create([
            'name' => request('name'),
            'poster' => $fileName,
            'threeD' => request('threeD', false),
            'dolby' => request('dolby', false)
        ]);
    
        return redirect('/theater');
    }

    public function show($id){
        $theater = Theater::findOrFail($id);
        return view('theaters.show', ['theater' => $theater]);
    }

    public function edit($id){
    $theater = Theater::findOrFail($id);
    return view('theaters.edit', ['theater' => $theater]);
    }

    public function update($id) {
        request()->validate([
            'name' => 'required',
            'poster' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'threeD' => 'boolean',
            'dolby' => 'boolean'
        ]);
    
        $theater = Theater::findOrFail($id);
    
        // Handle file upload
        if (request()->hasFile('poster')) {
            $fileName = time() . '.' . request()->poster->extension();
            request()->poster->move(public_path('images/theater'), $fileName);
        } else {
            $fileName = $theater->poster; // Keep the old poster if no new file is uploaded
        }
    
        // Update theater
        $theater->update([
            'name' => request('name'),
            'poster' => $fileName,
            'threeD' => request('threeD', false),
            'dolby' => request('dolby', false)
        ]);
    
        return redirect('/theater/' . $theater->id);
    }    

    public function delete($id){
        $theater = Theater::findOrFail($id);
        $theater->delete();
        return redirect('/theater');
    }
}