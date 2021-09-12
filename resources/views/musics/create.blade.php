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
        <label for="music">Música</label>
        <input type="text" name="music" id="music" class="form-control">
    </div>
    <button class="btn btn-success mt-2">Cadastrar Música</button>

</form>
<a class="btn btn-link" href="/">Voltar para página Principal</a>
@endsection
