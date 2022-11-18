<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/navbar-footer.css">
    {{-- <link rel="stylesheet" href="css/index.css"> --}}
    {{-- <link rel="stylesheet" href="css/projetos.css"> --}}
    {{-- <link rel="stylesheet" href="css/contato.css"> --}}
    <link rel="stylesheet" href="css/visualizar-projeto.css">
</head>
</head>

<body>

    <nav>
        <div class="navbar">

            <a href="index.html"><img src="/img/logo.png" alt=""></a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a href="{{ route('inicio') }}">INICIO</a></li>
                <li><a href="{{ route('projetos') }}">PROJETOS</a></li>
                <li><a href="{{ route('contato') }}" style="color:#EB5757">CONTATO</a></li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <footer>
        <div class="container-footer">
            <div class="conteudo-footer">
                <p>(18) 99999-9999</p>
                <p>exemplo@gmail.com</p>
                <p>Rua xxxxxxx, XX - Tarumã - SP</p>
            </div>
        </div>
    </footer>

    {{-- <script src="/assets/js/mobile-navbar.js"></script> --}}
</body>

</html>
