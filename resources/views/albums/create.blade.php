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

<form method="POST" enctype="multipart/form-data">
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
        <input type="text" name="artist" id="artist" class="form-control">
    </div>
    <div class="form-group">
        <label for="genre">Gênero Musical</label>
        <input type="text" name="genre" id="genre" class="form-control">
    </div>
    <div class="form-group my-2">
        <label for="photo">Foto do Álbum</label>
        <input type="file" name="photo" id="photo" class="form-control-file">
    </div>
    <div class="form-group mb-3">
        <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#musicsModal">
            Cadastrar Musicas
        </a>
    </div>
    <!-- Modal -->
    <div class="modal" id="musicsModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Musica</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>X</span>

                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="music">Musica</label>
                        <input type="text" name="music" id="music" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button">Adicionar Músicas</button>
                </div>
            </div>
        </div>
    </div>

    <button class="btn btn-success">Cadastrar Álbum</button>
    <button class="btn btn-success">Editar Álbum</button>

</form>

@endsection
