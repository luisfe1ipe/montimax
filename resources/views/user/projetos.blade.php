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
                <li><a href="index.html">Início</a></li>
                <li><a href="{{ route('projeto.index') }}" id="navbar-ativo">Projetos</a></li>
                <li><a href="{{ route('contato.create') }}">Contato</a></li>
            </ul>
        </div>
    </nav>


    <div class="container">


        <div class="container-titulo">
           <div class="titulo">
            <div class="destaque"></div>
            <h1>Nossos Projetos</h1>
           </div>
            <p>Todos os nossos projetos são feitos de acordo com as regulamentações</p>
        </div>

        <div class="search">
            <form action="{{ route('projeto.index') }}" method="get">
                <input type="text" name="search" id="" placeholder="Digite aqui...">
                <button>Pesquisar</button>
            </form>
        </div>

        <div class="criar-proj">
            <a href="{{ route('projeto.create') }}">
                <button>Criar Projeto</button>
            </a>
        </div>

        @foreach ($projetos as $projeto)
            <div class="container-projeto">
                <a href="{{ route('projeto.show', ['id' => $projeto->id]) }}">
                    <div class="img-projeto">
                        <img src="{{ url("storage/{$projeto->img_principal}") }}" alt="">
                    </div>
                </a>
                <a href="{{ route('projeto.show', ['id' => $projeto->id]) }}">
                    <div class="conteudo-projeto">
                        <h1>
                            {{ $projeto->titulo }}
                        </h1>
                        <p>
                            {{ $projeto->descricao }}
                        </p>
                        <div class="categoria-data">
                            <span><strong>Publicado:</strong> {{ $projeto->created_at = date('d M Y') }}</span>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

        <div class="paginate">
            {{$projetos->appends([
                'search' => request()->get('search', '')
            ])->links()}}
        </div>
    </div>

    <script src="/assets/js/mobile-navbar.js"></script>

</body>

</html>
