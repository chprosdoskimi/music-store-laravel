<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArtistRequest;
use App\Models\Artist;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ArtistsController extends Controller
{
    public function create()
    {
        return view('artists.form');
    }

    public function store(StoreArtistRequest $request)
    {
        try {
            Artist::create($request->only(['name']));
            return redirect('/artists/form')->with('success', 'Artista cadastrado com sucesso!');
        } catch (\Throwable $e) {
            return redirect()->back()->withErrors(['msg' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        try {
            $artist = Artist::findOrFail($id);
            return view('artists.form', compact('artist'));
        } catch (ModelNotFoundException $e) {
            return redirect('/artists/form')->withErrors(['msg' => 'Artista não encontrado!']);
        } catch (\Throwable $e) {
            return redirect('/artists/form')->withErrors(['msg' => $e->getMessage()]);
        }
    }

    public function update(StoreArtistRequest $request, $id)
    {
        try {
            Artist::where('id', $id)->update($request->only(['name']));
            return redirect('/artists/form')->with('success', 'Artista atualizado com sucesso!');
        } catch (\Throwable $e) {
            return redirect()->back()->withErrors(['msg' => $e->getMessage()]);
        }
    }
}
