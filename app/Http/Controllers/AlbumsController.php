<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAlbumRequest;
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
        // $album = new Album;
        // $album->name = $request->album;
        // $album->year = $request->year;
        // $album->price = $request->price;

        dd($request->all());

        // $image = $request->image;

        // $ext = $image->extension();

        // $imageExt = explode($ext, $image);
        // dd($imageExt);

        // $imagePath = $image->getClientOriginalName() . strtotime('now') . $ext;

        // dd($imagePath);

        //   return ;
    }
}
