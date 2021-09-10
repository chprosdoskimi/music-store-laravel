<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArtistRequest;
use Illuminate\Http\Request;

class ArtistsController extends Controller
{
    public function create(Request $request)
    {
        return view('artists.create');
    }

    public function store(StoreArtistRequest $request)
    {


        //   return ;
    }
}
