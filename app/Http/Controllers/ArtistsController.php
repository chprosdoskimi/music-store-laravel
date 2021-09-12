<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArtistRequest;
use App\Models\Artist;
use Illuminate\Http\Request;


class ArtistsController extends Controller
{
    public function create(Request $request)
    {
        return view('artists.create');
    }

    public function store(StoreArtistRequest $request)
    {
        $artist = new Artist();
        $artist->name = $request->name;

        $artist->save();

        return redirect('/artists/create');
    }
}
