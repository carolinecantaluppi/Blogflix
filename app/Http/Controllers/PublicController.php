<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;

class PublicController extends Controller
{
    // Home:
    function home() {
        $movie = Movie::all();
        return view('home', compact('movie'));
    }
    
}
