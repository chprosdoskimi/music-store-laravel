<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGenreRequest;
use Illuminate\Http\Request;
use App\Models\Genre;

class GenresController extends Controller
{
    public function create(Request $request)
    {
        return view('genres.create');
    }

    public function store(StoreGenreRequest $request)
    {
        $genre = new Genre();
        $genre->name = $request->name;

        $genre->save();

        return redirect('/genres/create');
    }
}
