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
    <div class="form-group mt-2 mb-5">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#musicModal">
            Adicionar Música
        </button>
    </div>


    <!-- Modal -->

    <div class="modal fade" id="musicModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Músicas do Álbum</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="music">Música</label>
                        <input type="text" name="music" id="music" class="form-control">
                    </div>
                    <ul id="modalMusics">
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" id="btnMusic" class="btn btn-primary">Adicionar</button>
                </div>
            </div>
        </div>
    </div>

    <button class="btn btn-success">Cadastrar Álbum</button>
    <button class="btn btn-secondary">Editar Álbum</button>

</form>
@endsection
