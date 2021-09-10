<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtistsController extends Controller
{
    public function create(Request $request)
    {
        return view('artists.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'artist' => 'required',
        ]);


        //   return ;
    }
}
