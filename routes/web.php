<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Rotas publicas que n precisam de login
Route::group([], function () {
    Route::get('/home', [PublicController::class, 'home'])->name('home');    
    Route::get('/home/moviedetail', [PublicController::class, 'moviedetail'])->name('moviedetail');
});

// Rotas autenticadas por login
// so quem ta logado pode acessar elas
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home/update/{movie}', [PublicController::class, 'update'])->name('movie.update');   
    // Route::post('', [PublicController::class, ''])->name(''); 
});
