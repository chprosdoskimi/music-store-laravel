@extends('layout')

@section('title')
Cadastrar Álbuns
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

<div id="result"></div>

<form method="POST" id="form" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="album">Nome do Álbum</label>
        <input type="text" class="form-control" id="album" name="album">
    </div>
    <div class="form-group">
        <label for="year">Ano de Lançamento</label>
        <input type="text" name="year" id="year" class="form-control">
    </div>

    <div class="form-group">
        <label for="price">Preço</label>
        <input type="text" name="price" id="price" class="form-control">
    </div>
    <div class="form-group">
        <label for="artist">Artista</label>
        <select class="form-select" name="artist" id="artist">
            @forelse ( $artists as $artist )
            <option value="{{$artist->id}}">{{$artist->name}}</option>
            @empty
            <option value=""></option>
            @endforelse
        </select>
    </div>
    <div class="form-group">
        <label for="genre">Gênero Musical</label>
        <select class="form-select" name="genre" id="genre">
            @forelse ( $genres as $genre )
            <option value="{{$genre->id}}">{{$genre->name}}</option>
            @empty
            <option value=""> </option>
            @endforelse
        </select>
    </div>
    <div class="form-group my-2">
        <label for="image">Foto do Álbum</label>
        <input type="file" name="image" id="image" class="form-control-file">
    </div>

    <button class="btn btn-success">Cadastrar Álbum</button>
    <!-- <button class="btn btn-secondary">Editar Álbum</button> -->

</form>
@endsection
