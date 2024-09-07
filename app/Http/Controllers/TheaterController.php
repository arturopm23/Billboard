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

    public function store(){

            request()->validate([
                'name' => ['required'],
                'poster' => ['required'],
                'threeD' => ['boolean'],
                'dolby' => ['boolean']
            ]);
        
            Theater::create([
                'name' => request('name'),
                'poster' =>  request('poster'),
                'threeD' =>  request('threeD'),
                'dolby' =>  request('dolby')
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

    public function update($id){

        request()->validate([
            'name' => ['required'],
            //'poster' => ['required'],
            'threeD' => ['boolean'],
            'dolby' => ['boolean']
        ]);
    
        //update
        $theater =  Theater::findOrFail($id);
    
        $theater->update([
            'name' => request('name'),
            //'poster' =>  request('poster'),
            'threeD' =>  request('threeD'),
            'dolby' =>  request('duration'),
            'synopsis' =>  request('dolby')
        ]);
    
        return redirect('/theater/' . $theater->id);
    }

    public function delete($id){
        $theater = Theater::findOrFail($id);
        $theater->delete();
        return redirect('/theater');
    }
}