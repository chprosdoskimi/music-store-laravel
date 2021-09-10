<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\ArtistsController;
use App\Http\Controllers\GenresController;

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

Route::get('/', function () {
    return view('welcome');
});
//Artists Routes
Route::get('/artists/create', [ArtistsController::class, 'create']);
Route::post('/artists/create', [ArtistsController::class, 'store']);

//Albuns Routes
Route::get('/albums/index', [AlbumsController::class, 'index']);
Route::get('/albums/create', function () {
    return view('albums.create');
});

Route::post('/albums/create', [AlbumsController::class, 'store']);

//Genres Routes
Route::get('/genres/create', [GenresController::class, 'create']);
Route::post('/genres/create', [GenresController::class, 'store']);
