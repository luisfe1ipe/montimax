<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos - MONTIMAX</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/navbar-footer.css">
    <link rel="stylesheet" href="/assets/css/projetos.css">
</head>

<body>

    <nav>
        <div class="navbar">

            <a href="index.html"><img src="/assets/img/logo.png" alt=""></a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a href="index.html">INICIO</a></li>
                <li><a href="projetos.html" id="navbar-ativo">PROJETOS</a></li>
                <li><a href="contato.html">CONTATO</a></li>
            </ul>
        </div>
    </nav>


    <div class="container">


        <div class="container-titulo">
            <h1 class="titulo">
                <div class="destaque"></div>Nossos Projetos
            </h1>
            <p>Todos os nossos projetos são feitos de acordo com as regulamentações</p>
        </div>

        @foreach ($projetos as $projeto)
            <div class="container-projeto">
                <a href="{{ route('projeto.show', ['id' => $projeto->id]) }}">
                    <div class="img-projeto">
                        <img src="" alt="">
                    </div>
                </a>
                <a href="/visualizar-projeto.html">
                    <div class="conteudo-projeto">
                        <h1>
                            {{$projeto->titulo}}
                        </h1>
                        <p>
                            {{$projeto->descricao}}
                        </p>
                        <div class="categoria-data">
                            <span>
                                <img src="assets/svg/calendario.svg" alt="">
                                {{$projeto->data_inicio}}
                            </span>
                           
                        </div>
                    </div>
                </a>
            </div>
        @endforeach


    </div>

    <script src="/assets/js/mobile-navbar.js"></script>

</body>

</html>
