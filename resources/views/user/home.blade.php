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
    
    <footer class="text-center text-lg-start bg-dark text-muted">
        <section class="pt-1">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            <img src="/assets/img/logo.png" alt="">
                        </h6>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum animi tempora id ullam
                            eveniet accusamus provident eaque.</p>
                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Links úteis
                        </h6>
                        <p>
                            <a href="{{ route('home') }}" class="text-reset">Inicio</a>
                        </p>
                        <p>
                            <a href="{{ route('projeto.index') }}" class="text-reset">Projetos</a>
                        </p>
                        <p>
                            <a href="{{ route('contato.create') }}" class="text-reset">Contato</a>
                        </p>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">Contato</h6>
                        <p><i class="fas fa-home me-3"></i> Nome da rua</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            ammoraismontagens@hotmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> +55 (18) 99999-9999</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            Desenvolvido por:
            <a class="text-reset fw-bold" target="_blank"
                href="https://instagram.com/luisfe1ipe?igshid=ZDdkNTZiNTM=">Luis Felipe</a>
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
