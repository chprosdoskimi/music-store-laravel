<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function create(Request $request)
    {
        return view('genres.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'genre' => 'required',
        ]);
        //   return ;
    }
}
