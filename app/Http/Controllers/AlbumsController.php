<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAlbumRequest;
use App\Models\Album;
use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Genre;


class AlbumsController extends Controller
{
    public function home(Request $request)
    {

        $albuns = [
            'Frogstomp',
            'Neon Ballroom',
            'Freak Show',
            'Californication',
            'By the Way',
            'Californication'
        ];

        return view('albums.home', ["albuns" => $albuns]);
    }

    public function index()
    {
        $artists = Artist::all();
        $genres = Genre::all();
        return view('albums.create', ['artists' => $artists, 'genres' => $genres]);
    }

    public function store(StoreAlbumRequest $request)
    {
        $album = new Album();
        $album->name = $request->album;
        $album->year = $request->year;
        $album->price = $request->price;
        $album->artist_id = $request->artist;
        $album->genre_id = $request->genre;

        if ($request->hasFile('image') && $request->image->isValid()) {
            $imagePath = $request->image->store('albums');
            $album->photo = $imagePath;
        }

        $album->save();

        return redirect()->action([MusicsController::class, 'create'], ['id' => $album->id]);
    }
}
