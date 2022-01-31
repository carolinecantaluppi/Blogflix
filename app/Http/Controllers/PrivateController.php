<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrivateController extends Controller
{
    // Movie:
    public function movieview(Request $request)
    {
        return view('movies/moviecreate');
    }

    public function movieCreate(Request $request)
    {
        $movie = Movie::create([
            'img'=>$request->file('img')->store('public/img'),      // php artisan storage:link -> usare su terminale per collegare la cartella storage e salvare.
            'title'=>$request->input('title'),
            'body'=>$request->input('body'),
            'category'=>$request->input('category'),
            'authorname'=>$request->input('authorname')
            // 'user_id'=>Auth::id()
        ]);

        return redirect(route('home'));
    }

    public function update(Movie $movie)
    {
        return view('movieupdate', compact('movie'));
        // return redirect()->route('movieupdate', ['movie' => $forms]);
    }

}
