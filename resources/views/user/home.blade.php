<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - MONTIMAX</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="icon" href="/assets/svg/M.svg">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <link rel="stylesheet" href="/assets/css/navbar-footer.css">
    <link rel="stylesheet" href="/assets/css/index.css">
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
                                <a class="nav-link nav-active" aria-current="page" href="{{ route('home') }}">Inicio</a>
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

    <div class="img-painel">
        <img src="{{ asset('assets/img/img-painel.png') }}" alt="">

        <div class="container-sm">
            <div class="conteudo-painel">
                <h1>Precisa de algo ?</h1>
                <p>
                    Entre em contato para que possamos ajuda-lo
                </p>
                <a href="{{ route('contato.create') }}">
                    <button class="btn custom-red">
                        Contato
                    </button>
                </a>
            </div>
        </div>
    </div>

    <div class="container-sm">
        <div class="container-sobre">
            <h2>Sobre nós</h2>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio earum reiciendis magni soluta,
                quibusdam ipsa dicta fuga quis corrupti, blanditiis nulla sequi numquam natus vitae. Aliquam, voluptatum
                quibusdam. Eum, explicabo.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem assumenda hic minima a beatae
                consectetur
                eos nostrum impedit fugit excepturi illum harum sequi, magnam eum sint? Laudantium mollitia eos omnis.
            </p>
        </div>
    </div>

    @if (count($projetos) > 2)
        <div class="container-sm d-flex flex-column justify-content-between mt-5">
            <h2>Nossos projetos</h2>
            <div class="container-sm d-flex justify-content-between mt-3 projetos">
                @foreach ($projetos as $key => $projeto)
                    <div class="card" style="width: 22rem;">
                        <a href="{{ route('projeto.show', ['id' => $projeto->id]) }}">
                            <img src="{{ asset("img-projetos/principal/{$projeto->img_principal}") }}"
                                class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <h5 class="card-title max-txt-card">{{ $projeto->titulo }}</h5>
                                <p class="card-text max-txt-card">{{ $projeto->descricao }}</p>
                            </div>
                        </a>
                    </div>
                    @if ($key == 2)
                    @break
                @endif
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-3">
            <a href="{{ route('projeto.index') }}" class="btn custom-red">Ver todos projetos</a>
        </div>
    </div>
@endif

<footer class="text-center text-lg-start text-muted">
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>

</body>

</html>
