@extends('layout')

@section('title')
Cadastrar Álbuns
@endsection

@section('content')
<form method="POST">
    <div class="form-group">
        <label for="name">Nome do Álbum</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="name">Ano de Lançamento</label>
        <input type="text" name="year" id="year" class="form-control">
    </div>

    <div class="form-group">
        <label for="price">Preço</label>
        <input type="text" name="price" id="price" class="form-control">
    </div>
    <div class="form-group">
        <label for="name">Artista</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="name">Gênero Musical</label>
        <input type="text" name="genre" id="genre" class="form-control">
    </div>
    <div class="form-group mb-2">
        <label for="name">Foto do Álbum</label>
        <input type="file" class="form-control">
    </div>
    <div class="form-group mb-3">
        <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#musicsModal">
            Cadastrar Musicas
        </a>
    </div>

    <button class="btn btn-success">Cadastrar Álbum</button>
    <button class="btn btn-success">Editar Álbum</button>

</form>
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
                    <label for="name">Musica</label>
                    <input type="text" name="music" id="music" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button">Adicionar Músicas</button>
            </div>
        </div>
    </div>
    @endsection
