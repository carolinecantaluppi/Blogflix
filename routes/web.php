<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\PrivateController;
use App\Providers\FortifyServiceProvider;

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

// Route pubblici che non richiedono il login
Route::group([], function () {
    Route::get('/home', [PublicController::class, 'home'])->name('home');    
    Route::get('/home/moviedetail', [PublicController::class, 'moviedetail'])->name('moviedetail');
    Route::post('/register', [PrivateController::class, 'register'])->name('register');
    // Route::post('/login', [PrivateController::class, 'login'])->name('login');
});

// Route autenticati tramite login
Route::group(['middleware' => 'auth'], function () {
    Route::post('/home/update/{movie}', [PrivateController::class, 'update'])->name('movie.update');   
    Route::post('/home/submit', [PrivateController::class, 'movieCreate'])->name('moviecreate'); 
});
