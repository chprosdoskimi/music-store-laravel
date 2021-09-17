@extends('layout')

@section('title', ( isset($artist) ? 'Editar' : 'Cadastrar' ).' Artista' )

@section('content')

<form action="{{ url('/artists') }}" method="{{ isset($artist) ? 'PUT' : 'POST' }}">
    @csrf
    <div class="form-group">
        <label for="name">Artista</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Nome do Artista" value="{{ isset($artist) ? $artist->name : '' }}">
    </div>

    <button class="btn btn-success mt-2" type="submit">{{ isset($artist) ? 'Salvar' : 'Cadastrar' }} Artista</button>

</form>

@endsection
