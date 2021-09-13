@extends('layout')

@section('title')
Cadastrar Música
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
        <label for="album">Album de Música</label>
        <select class="form-select" name="album" id="album">
            @forelse ( $albuns as $albun )
            <option value="{{$albun->id}}">{{$albun->name}}</option>
            @empty
            <option value=""> </option>
            @endforelse
        </select>
    </div>
    <div class="form-group">
        <label for="music">Música</label>
        <input type="text" name="music" id="music" class="form-control">
    </div>
    <div class="form-group">
        <label for="duration">Duração em segundos</label>
        <input type="number" name="duration" value="160" id="duration" class="form-control">
    </div>
    <button class="btn btn-success mt-2">Cadastrar Música</button>

</form>
<a class="btn btn-link" href="/">Voltar para página Principal</a>
@endsection
