<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome projeto - MONTIMAX</title>

    <link rel="icon" href="/assets/svg/M.svg">
    <link rel="stylesheet" href="/assets/css/navbar-footer.css">
    <link rel="stylesheet" href="/assets/css/visualizar-projeto.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;800&display=swap" rel="stylesheet">

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
                <li><a href="projetos.html">PROJETOS</a></li>
                <li><a href="contato.html">CONTATO</a></li>
            </ul>
        </div>
    </nav>



    <div class="container">
        <div class="container-projeto">

            <div class="titulo-projeto">
                <h1 id="titulo-projeto">{{ $projeto->titulo }}</h1>
            </div>

            <div class="data">
                @if ($projeto->data_inicio)
                    <p><strong>Data inicio: </strong>{{ $projeto->data_inicio }}</p>
                @endif
                @if ($projeto->data_final)
                    <p><strong>Data final: </strong>{{ $projeto->data_final }}</p>
                @endif

            </div>

            <div class="projeto">
                <div class="foto-projeto">
                    <div class="foto-principal">
                        <a href="{{ url("storage/{$projeto->img_principal}") }}">
                            <img src="{{ url("storage/{$projeto->img_principal}") }}" alt="">
                        </a>
                    </div>
                    <div class="container-foto-secundaria">
                        @if ($projeto->img_secundaria)
                            <div class="foto-secundaria">
                                <a href="{{ url("storage/{$projeto->img_secundaria}") }}">
                                    <img src="{{ url("storage/{$projeto->img_secundaria}") }}" alt="">
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="descricao-projeto">
                    <p>
                        {{ $projeto->descricao }}
                    </p>
                </div>
            </div>



        </div>
        <div class="btns">
            <a href="{{ route('projeto.edit', ['id' => $projeto->id]) }}">editar</a>
            <form action="{{ route('projeto.delete', $projeto->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit">Excluir</button>
            </form>
        </div>
    </div>




    <script src="/assets/js/mobile-navbar.js"></script>

</body>

</html>
