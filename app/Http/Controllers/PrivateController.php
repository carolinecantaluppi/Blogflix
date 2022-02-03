<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MovieRequestEdit;
use App\Http\Requests\MovieRequestCreate;

class PrivateController extends Controller
{
    // Movie:
    public function movieview(Request $request)
    {
        return view('movies/moviecreate');
    }

    public function movieCreate(MovieRequestCreate $request)
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

    public function mymovies(Request $request, Movie $movie)
    {
        $movies = Movie::all();
        $selectedmovie = $movie;
        return view('movies/mymovies', compact('movies', 'selectedmovie'));
    }

    public function edit(Movie $movie, MovieRequestEdit $request)
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
        return redirect(route('mymovies'));
    }

    public function delete(Request $request, $id)
    {
        $movie = Movie::destroy($id);

        return redirect(route('mymovies'));
    }
}
