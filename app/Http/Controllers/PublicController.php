<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;

class PublicController extends Controller
{
    // Home:
    function home(Request $request) {
        
        $search = $request->input('search');
        
        if ($search == '') {

            $movies = Movie::all();

        } else {

            $movies = Movie::where('title', 'LIKE', '%'.$search.'%')->orWhere('category', 'LIKE', '%'.$search.'%')
            ->orWhere('authorname', 'LIKE', '%'.$search.'%')->get();
            
        }
        return view('home', compact('movies'));
    }
    
    public function moviedetail(Request $request, $id)
    {
        $movie = Movie::find($id);
        return view('movies/moviedetail', compact('movie'));
    }
}
