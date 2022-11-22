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
    <link rel="stylesheet" href="/assets/css/index.css">
</head>

<body>



    <div class="border-bottom border-danger fixed-top bg-white">
        <div class="container-sm">
            <nav class="navbar navbar-expand-lg"> 
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="/assets/img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link nav-active" aria-current="page" href="#">Inicio</a>
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
                <a href="">
                    <button class="btn btn-p">
                        Contato
                    </button>
                </a>
            </div>
        </div>
    </div>

    <div class="container-sm">
        <div class="container-sobre">
            <h1>Sobre nós</h1>
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

    <div class="container-sm d-flex flex-column justify-content-between mt-5">
        <h1>Nossos projetos</h1>
        <div class="container-sm d-flex justify-content-between mt-3">
            @foreach ($projetos as $key => $projeto)
            <div class="card shadow" style="width: 22rem;">
                <a href="{{ route('projeto.show', ['id' => $projeto->id]) }}">
                    <img src="{{ asset("img-projetos/principal/{$projeto->img_principal}") }}" class="card-img-top"
                    alt="...">
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
        <div class="d-flex justify-content-center mt-5">
            <a href="{{ route('projeto.index') }}" class="btn btn-p">Ver todos projetos</a>
        </div>
    </div>

    <footer>
        <container class="sm">
            <p></p>
        </container>
    </footer>


<script src="/assets/js/mobile-navbar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

</body>

</html>
