<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\ArtistsController;

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
Route::get('/artists/create', [ArtistsController::class, 'create']);

//Albuns Routes
Route::get('/albums/index', [AlbumsController::class, 'index']);
Route::get('/albums/create', function () {
    return view('albums.create');
});

Route::post('/albums/create', [AlbumsController::class, 'store']);
