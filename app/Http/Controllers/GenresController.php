<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGenreRequest;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function create(Request $request)
    {
        return view('genres.create');
    }

    public function store(StoreGenreRequest $request)
    {
        $request->validate([
            'genre' => 'required',
        ]);
        //   return ;
    }
}
