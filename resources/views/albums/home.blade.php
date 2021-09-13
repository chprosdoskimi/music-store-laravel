@extends('layout')

@section('title')
Álbuns Disponíveis
@endsection

@section('content')

<form method="GET" class="d-flex">
    @csrf
    <select class="form-select" name="search" id="search">
        @forelse ( $genres as $genre )
        <option value="{{$genre->id}}">{{$genre->name}}</option>
        @empty
        <option value=""> </option>
        @endforelse
    </select>
    <button class="btn btn-outline-success" type="submit">Filtrar</button>
</form>

@if($albuns)

<div class="row">
    <div class="col">

        @forelse ( $albuns as $album)
        <div class="card my-2 " style="width: 18rem">
            <img class="card-img-top" src="{{ url('storage/'.$album->photo)}}" alt="{{$album->name}}" style=" max-width: 100%;">
            <div class="card-body">
                <h5 class="card-title">{{$album->name}}</h5>
                <p class="card-text">Preço R$: <strong>{{$album->price}}</strong></p>
                <p class="card-text">Gênero: <strong>{{$album->genre->name}}</strong></p>
                <p class="card-text">Artista: <strong>{{$album->artist->name}}</strong></p>
                <a class="btn btn-primary" data-bs-toggle="collapse" href="#showMusic{{$album->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Exibir Músicas
                </a>
                <div class="collapse" id="showMusic{{$album->id}}">
                    <div class="card card-body">
                        @if(!$album->music)
                        <ul>
                            @foreach ( $album->musics as $music )
                            <li>{{ $loop->index+1 }} - {{$music->name}} <strong>{{$music->formated_duration}}</strong></li>
                            @endforeach
                        </ul>
                        @else
                        <p>Nenhuma música cadastrada</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@empty
<h2>Nenhum Álbum Cadastrado</h2>
@endforelse

@endif

@endsection
