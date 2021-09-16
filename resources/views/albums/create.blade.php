@extends('layout')

@section('title')

@if(isset($album))
Editar Álbum
@else
Cadastrar Álbuns
@endif
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


<form method="POST" id="form" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="album">Nome do Álbum</label>
        <input type="text" class="form-control" id="album" name="album" value="{{isset($album)?$album->name:'' }}">
    </div>
    <div class="form-group">
        <label for="year">Ano de Lançamento</label>
        <input type="text" name="year" id="year" class="form-control" value="{{isset($album)?$album->year:'' }}">
    </div>

    <div class="form-group">
        <label for="price">Preço</label>
        <input type="text" name="price" id="price" class="form-control" value="{{isset($album)?$album->price:'' }}">
    </div>
    <div class="form-group">
        <label for="artist">Artista</label>
        <select class="form-select" name="artist" id="artist">
            @forelse ( $artists as $artist )
            <option value="{{$artist->id}}" {{isset($album) && $album->artist_id == $artist->id ? 'selected' : ''}}>{{$artist->name}}</option>
            @empty
            <option value=""></option>
            @endforelse
        </select>
    </div>
    <div class="form-group">
        <label for="genre">Gênero Musical</label>
        <select class="form-select" name="genre" id="genre">
            @forelse ( $genres as $genre )
            <option value="{{$genre->id}}" {{isset($album) && $album->genre_id == $genre->id ? 'selected' : ''}}>{{$genre->name}}</option>
            @empty
            <option value=""> </option>
            @endforelse
        </select>
    </div>
    <div class="form-group my-2">
        <label for="image">Foto do Álbum</label>
        <input type="file" name="image" id="image" class="form-control-file">
    </div>

    @if (isset($album))
    <button class=" btn btn-success" href="{{url("/albums/edit/$album->id")}}">Editar Álbum</button>

    @else

    <button class="btn btn-success" href="{{url("/albums/create")}}">Cadastrar Álbum</button>
    @endif
</form>
@endsection
