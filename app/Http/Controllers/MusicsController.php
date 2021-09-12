<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGenreRequest;
use Illuminate\Http\Request;
use App\Models\Music;

class MusicsController extends Controller
{
    public function create(Request $request)
    {
        return view('musics.create');
    }

    public function store(StoreGenreRequest $request)
    {

        return;
    }
}
