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
    Route::get('/', [PublicController::class, 'home']);    
    Route::get('/home', [PublicController::class, 'home'])->name('home');    
    Route::get('/home/moviedetail', [PublicController::class, 'moviedetail'])->name('moviedetail');
});

// Route autenticati tramite login
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home/create', [PrivateController::class, 'movieview'])->name('movieview'); 
    Route::post('/home/create', [PrivateController::class, 'movieCreate'])->name('moviecreate'); 
    Route::get('/mymovies/{movie?}', [PrivateController::class, 'mymovies'])->name('mymovies');
    // Route::post('/mymovies/update/{id}', [PrivateController::class, 'update'])->name('movieupdate');   
    Route::post('/mymovies/edit/{id}', [PrivateController::class, 'edit'])->name('movieedit');   
    Route::post('/mymovies/delete/{id}', [PrivateController::class, 'delete'])->name('moviedelete');   
});
