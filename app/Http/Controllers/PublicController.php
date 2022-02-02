<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;

class PublicController extends Controller
{
    // Home:
    function home() {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }
    
    public function moviedetail(Request $request, $id)
    {
        $movie = Movie::find($request->input('id'));
        return view('movies/moviedetail', compact('movie'));
    }
}
