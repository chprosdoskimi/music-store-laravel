<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\ArtistsController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\MusicsController;


// Route::get('/', function () {
//     return view('welcome');
// });
//Artists Routes
Route::get('/artists/form', [ArtistsController::class, 'create']);
Route::post('/artists', [ArtistsController::class, 'store']);
Route::get('/artists/form/{id}', [ArtistsController::class, 'edit']);
Route::put('/artists/form/{id}', [ArtistsController::class, 'update']);

//Albuns Routes
Route::get('/', [AlbumsController::class, 'home']);

Route::get('/albums/create', [AlbumsController::class, 'index']);
Route::post('/albums/create', [AlbumsController::class, 'store']);

Route::get('/albums/edit/{id}', [AlbumsController::class, 'edit']);
Route::post('/albums/edit/{id}', [AlbumsController::class, 'update']);

//Genres Routes
Route::get('/genres/create', [GenresController::class, 'create']);
Route::post('/genres/create', [GenresController::class, 'store']);

//Musics Routes
Route::get('/musics/create', [MusicsController::class, 'create']);
Route::post('/musics/create', [MusicsController::class, 'store']);
// Route::post('/musics/edit/{id}', [MusicsController::class, 'edit']);
