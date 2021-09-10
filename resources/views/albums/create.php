<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Albuns</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <a class="navbar-brand" href="/albums">Music Store</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="/contact/index">Cadastrar Álbum</a>
                </li>

                <!-- <li class="nav-item">
                    <a class="nav-link" href="/login/logout">Sair</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/login/index">Entrar</a>
                </li> -->

            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="jumbotron mt-5 ">
            <h1>Cadastrar Álbuns</h1>
        </div>


        <form method="POST">
            <div class="form-group">
                <label for="name">Nome do Álbum</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Ano</label>
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
            <div class="form-group mb-2">
                <label for="name">Foto do Álbum</label>
                <input type="file" class="form-control">
            </div>
            <div class="form-group mb-3">
                <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                    Cadastrar Musicas
                </button>
            </div>

            <button class="btn btn-success">Cadastrar Album</button>
        </form>

    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>
