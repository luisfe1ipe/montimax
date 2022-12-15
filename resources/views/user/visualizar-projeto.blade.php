<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $projeto->titulo }} - MONTIMAX</title>

    <link rel="icon" href="/assets/svg/M.svg">
    <link rel="stylesheet" href="/assets/css/navbar-footer.css">
    <link rel="stylesheet" href="/assets/css/visualizar-projeto.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">



</head>

<body>

    <div class="border-bottom border-danger fixed-top bg-white">
        <div class="container-sm">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('home') }}"><img src="/assets/img/logo.png"
                            alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            @auth
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Admin
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('projeto.create') }}">Criar projeto</a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('contato.index') }}">Visualizar
                                                contatos</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a></li>
                                    </ul>
                                </li>
                            @endauth
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('home') }}">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('projeto.index') }}">Projetos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contato.create') }}">Contato</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>


    <div class="container-sm overflow-hidden">
        <div class="container-projeto">
            <h1>{{ $projeto->titulo }}</h1>
            <div class="data">
                @if ($projeto->data_inicio)
                    <span><strong>Inicio</strong>: {{ $projeto->data_inicio = date('d/m/Y') }}</span>
                @endif
                @if ($projeto->data_final)
                    <span><strong>Termino</strong>: {{ $projeto->data_final = date('d/m/Y') }}</span>
                @endif
            </div>
            <div class="d-flex projeto">
                <div class="foto-projeto">
                    <div class="foto-principal">
                        <img id="imageBox" src="{{ asset("img-projetos/principal/{$projeto->img_principal}") }}"
                            onclick="myFunction(this)">
                    </div>
                    <div class="container-foto-secundaria">
                        <div class="foto-secundaria">
                            <img src="{{ asset("img-projetos/secundaria/{$projeto->img_secundaria}") }}"
                                onclick="myFunction(this)">
                        </div>
                        <div class="foto-secundaria">
                            <img src="{{ asset("img-projetos/terciaria/{$projeto->img_terciaria}") }}"
                                onclick="myFunction(this)">
                        </div>
                        <div class="foto-secundaria">
                            <img src="{{ asset("img-projetos/principal/{$projeto->img_principal}") }}"
                                onclick="myFunction(this)">
                        </div>
                    </div>
                </div>
                <div class="descricao-projeto">
                    <p>
                        {{ $projeto->descricao }}
                    </p>
                </div>
            </div>
        </div>
        @auth
            <div class="btns">
                <form action="{{ route('projeto.delete') }}" method="POST">
                    @csrf
                    <input type="hidden" name="projeto_action_id" class="projeto_id" value="{{ $projeto->id }}">
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
                <form action="{{ route('projeto.edit') }}" method="GET">
                    <input type="hidden" name="projeto_action_id" class="projeto_id" value="{{ $projeto->id }}">
                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>
        @endauth
    </div>

    <footer class="w-100 text-center text-lg-start text-muted">
        <div class="container-sm">
            <section class="d-flex justify-content-center justify-content-lg-between p-4">
                <div class="me-5  d-lg-block">
                    <span>Rua xxx, XX - Tarumã, SP</span>
                </div>
                <div class="me-5 d-lg-block">
                    <span>ammoraismontagens@hotmail.com</span>
                </div>
                <div class="d-flex align-items-center">
                    <a href="" class="me-5 text-reset" style="padding-left: 4px">(xx) xxxxx-xxxx
                    </a>
                </div>
            </section>
        </div>
    </footer>

    <script>
        function myFunction(smallImg) {
            var fullImg = document.getElementById("imageBox");
            fullImg.src = smallImg.src;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

</body>

</html>
