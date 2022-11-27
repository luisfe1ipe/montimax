<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos - MONTIMAX</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="/assets/css/navbar-footer.css">
    <link rel="stylesheet" href="/assets/css/projetos.css">
</head>

<body>

    {{-- <nav class="navbar fixed-top border-bottom border-danger">
        <div class="container-sm d-flex">
            <a href="index.html"><img class="navbar-brand" src="/assets/img/logo.png" alt=""></a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <div class="navlist">
                <ul class="d-flex">
                    <li><a href="index.html">Início</a></li>
                    <li><a href="{{ route('projeto.index') }}" id="navbar-ativo">Projetos</a></li>
                    <li><a href="{{ route('contato.create') }}">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav> --}}

    <div class="border-bottom border-danger fixed-top bg-white">
        <div class="container-sm">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid container-sm">
                    <a class="navbar-brand" href="#"><img src="/assets/img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="">
                        <ul class="navbar-nav">
                            @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Admin
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="{{ route('projeto.create') }}">Criar projeto</a></li>
                                  <li><a class="dropdown-item" href="{{ route('contato.index') }}">Visualizar contatos</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a></li>
                                </ul>
                            </li>
                            @endauth
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('home') }}">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-active" href="{{ route('projeto.index') }}">Projetos</a>
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


    <div class="container-sm titulo">
        <h1>Nossos Projetos</h1>
        <p>Todos os nossos projetos são feitos de acordo com as regulamentações</p>
    </div>

    <div class="container-sm d-flex flex-column align-items-center ">
       
        <div class="row">
            <div class="pesquisar">
                <form action="{{ route('projeto.index') }}" method="get">
                    <input type="text" name="search" id="" placeholder="Digite aqui...">
                    <button class="">Pesquisar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container-sm">
    

        @foreach ($projetos as $projeto)
            <div class="container-projeto">
                <a href="{{ route('projeto.show', ['id' => $projeto->id]) }}">
                    <div class="img-projeto">
                        <img src="{{ asset("img-projetos/principal/{$projeto->img_principal}") }}" alt="">
                    </div>
                </a>
                <div class="conteudo-projeto container-sm">
                    <a href="{{ route('projeto.show', ['id' => $projeto->id]) }}">
                        <h1>
                            {{ $projeto->titulo }}
                        </h1>
                        <p>
                            {{ $projeto->descricao }}
                        </p>
                        <div class="categoria-data">
                            <span><strong>Publicado:</strong> {{ $projeto->created_at = date('d M Y') }}</span>
                        </div>
                    </a>
                </div>

            </div>
        @endforeach
    </div>

    <div class="container-sm mt-5">
        {{ $projetos->appends([
                'search' => request()->get('search', ''),
            ])->links('pagination::bootstrap-5') }}
    </div>

    <script src="/assets/js/mobile-navbar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>

</html>
