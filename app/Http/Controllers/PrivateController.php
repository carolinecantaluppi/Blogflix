<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrivateController extends Controller
{
    // Movie:
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
        return view('movie.update', compact('movie'));
    }

    // // Register:
    // public function register(Request $request)
    // {
    //     $register = User::create([
    //         'name'=>$request->input('name'),
    //         'email'=>$request->input('email'),
    //         'password'=>$request->input('password'),
    //         'password_confirmation'=>$request->input('password_confirmation')
    //     ]);

    //     return redirect(route('home'));
    // }

    // // Login:
    // public function login(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required'],
    //     ]);

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();

    //         return redirect()->intended('dashboard');
    //     }

    //     return back()->withErrors([
    //         'email' => 'Le credenziali fornite non corrispondono ai nostri record.',
    //     ]);
    // }

}
