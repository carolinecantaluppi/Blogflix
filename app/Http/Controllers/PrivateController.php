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
            'authorname'=>$request->input('authorname'),
            'user_id'=>Auth::id()
        ]);

        return redirect(route('home'))->with('message', 'Il tuo film è stato aggiunto.');
    }

    // public function update(Request $request, $id)
    // {
    //     $movie = Movie::update($id);
    //     return redirect(route('mymovies'));
    // }

    public function mymovies()
    {
        $movies = Movie::all();
        return view('movies/mymovies', compact('movies'));
    }

    public function edit(Movie $movie, Request $request)
    {
        if ($movie['id'] === Auth::id()) {

            if ($request->file('img')) {
                
                $movie->update([
                    'img'=>$request->file('img')->store('public/img'),      // php artisan storage:link -> usare su terminale per collegare la cartella storage e salvare.
                    'title'=>$request->input('title'),
                    'body'=>$request->input('body'),
                    'category'=>$request->input('category'),
                    'authorname'=>$request->input('authorname')
                ]);
            } else {
                $movie->update([
                    'title'=>$request->input('title'), 
                    'body'=>$request->input('body'),
                    'category'=>$request->input('category'),
                    'authorname'=>$request->input('authorname')
                ]);
            };
        };
        return view('movies/movieupdate', compact($movie));
    }

    public function delete(Request $request, $id)
    {
        $movie = Movie::destroy($id);

        return redirect(route('mymovies'));
    }
}
