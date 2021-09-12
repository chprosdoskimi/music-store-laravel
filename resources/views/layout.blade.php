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
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Music Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/albums/create">Cadastrar Álbuns</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/artists/create">Cadastrar Artistas</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/genres/create">Cadastrar Gêneros</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <h3 class="my-5">@yield('title')</h3>

        @yield('content')

    </div>

    <footer class="page-footer font-small blue mt-5">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 my-5">© 2021 Copyright:
            <a href="#"> Music Store</a>
        </div>
        <!-- Copyright -->

    </footer>
    <script type="text/javascript">
        var btnMusic = document.getElementById('btnMusic');
        var inputMusic = document.getElementById('music');

        btnMusic.addEventListener('click', (e) => {
            console.log(btnMusic, 'Botão Clicado');
            console.log(inputMusic.value);

            var modal = document.getElementById('modalMusics');
            var inputEl = document.createElement('input');
            inputEl.setAttribute('type', 'hidden');
            inputEl.setAttribute('name', 'musics');
            inputEl.setAttribute('value', inputMusic.innerText);
            modal.appendChild(inputEl);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>
