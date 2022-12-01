<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver contatos - MONTIMAX</title>

    <link rel="icon" href="/assets/svg/M.svg">

    <link rel="stylesheet" href="/assets/css/navbar-footer.css">
    <link rel="stylesheet" href="/assets/css/todos-contato.css">

    <  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <div class="border-bottom border-danger fixed-top bg-white">
        <div class="container-sm">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('home') }}"><img src="/assets/img/logo.png" alt=""></a>
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




    <div class="container-contatos">
        <div class="btn-voltar mb-5">
            <a href="{{ route('contato.create') }} " class="btn btn-danger">Voltar</a>
        </div>

        <div class="cabecalho">
            <div class="search">
                <form action="{{ route('contato.index') }}" method="get">
                    <input type="text" name="search" id="" placeholder="Digite aqui...">
                    <button>Pesquisar</button>
                </form>
            </div>
            <div class="filtro">
                <form action="{{ route('contato.index') }}" method="get">
                    <select name="status" id="">
                        <option value="">Todos</option>
                        <option value="1">Lido</option>
                        <option value="0">Não Lido</option>
                    </select>
                    <button type="submit">Filtrar</button>
                </form>
            </div>
        </div>


    </div>
    <table class="table" style="width: 98%; margin:0 auto;">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">Status</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Assunto</th>
                <th scope="col">Data Envio</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contatos as $contato)
                <tr>
                    @if ($contato->status == false)
                        <td class="status" style="color: red; font-weight: bold">Não Lido</td>
                    @else
                        <td class="status" style="color: green; font-weight: bold">Lido</td>
                    @endif
                    <td id="nome">{{ $contato->nome }}</td>
                    <td id="email">{{ $contato->email }}</td>
                    <td id="assunto">{{ $contato->assunto }}</td>
                    <td>{{ date('d M Y, H:i', strtotime($contato->created_at)) }}</td>
                    <td>
                        <a href="{{ route('contato.edit', ['id' => $contato->id]) }}" class="btn btn-dark">Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

</body>

</html>
