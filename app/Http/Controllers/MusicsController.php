<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGenreRequest;
use Illuminate\Http\Request;
use App\Models\Music;
use App\Models\Album;

class MusicsController extends Controller
{
    public function create()
    {
        $albuns = Album::all();

        return view(
            'musics.create',
            ['albuns' => $albuns]
        );
    }

    public function store(Request $request)
    {
        // dd($request);
        $music = new Music();

        $music->name = $request->music;
        $music->duration = $request->duration;
        $music->album_id = $request->album;
        $music->save();

        return redirect('/musics/create');
    }

    public function edit($id)
    {
        $music = Music::find($id);
        return view('musics.create', ['music' => $music]);
    }
}
