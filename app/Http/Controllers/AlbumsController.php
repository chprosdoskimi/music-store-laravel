<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function index(Request $request)
    {

        $albuns = [
            'Frogstomp',
            'Neon Ballroom',
            'Freak Show',
            'Californication',
            'By the Way',
            'Californication'
        ];

        return view('albums.index', compact('albuns'));
    }
}
