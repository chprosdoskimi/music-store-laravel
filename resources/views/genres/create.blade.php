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

<form method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="artist">Gênero</label>
        <input type="text" name="genre" id="genre" class="form-control">
    </div>
    <!-- Modal -->

    <button class="btn btn-success mt-2">Cadastrar Gênero</button>

</form>

@endsection
