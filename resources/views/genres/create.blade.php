@extends('layout')

@section('title')
Cadastrar Artista
@endsection

@section('content')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="POST">
    @csrf
    <div class="form-group">
        <label for="genre">Gênero</label>
        <input type="text" name="name" id="genre" class="form-control">
    </div>
    <button class="btn btn-success mt-2">Cadastrar Gênero</button>

</form>

@endsection
