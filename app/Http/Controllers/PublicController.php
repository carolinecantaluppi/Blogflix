<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    function home() {
        $movie = Movie::all();
        return view('home', compact('movie'));
    }

    public function movieCreate(Request $request)
    {
        $movie - Movie::create([
            'img'=>$request->file('img')->store('public/img'),
            'title'=>$request->input('title'),
            'body'=>$request->input('body'),
            'category'=>$request->input('category'),
            'authorname'=>$request->input('authorname')
        ]);

        return redirect(route('home'));
    }

    public function update(Movie $movie)
    {
        return view('movie.update', compact('movie'));
    }
}
