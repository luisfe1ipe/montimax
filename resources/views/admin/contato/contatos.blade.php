<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="/assets/css/navbar-footer.css">
    <link rel="stylesheet" href="/assets/css/todos-contato.css">

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
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
                <li><a href="{{ route('projeto.index') }}">Projetos</a></li>
                <li><a href="{{ route('contato.create') }}">Contato</a></li>
            </ul>
        </div>
    </nav>




    <div class="container-contatos">

        <div class="search">
            <form action="{{ route('contato.index') }}" method="get">
                <input type="text" name="search" id="" placeholder="Digite aqui...">
                <button>Pesquisar</button>
            </form>

            <div class="filtro">
               <form action="{{ route('contato.index') }}" method="get">
                    <select name="fill" id="">
                        <option value="Lido">Lido</option>
                        <option value="Não Lido">Não Lido</option>
                    </select>
                    <button>Filtrar</button>
                </form>
            </div>
        </div>

        <table class="table">
            <thead class="thead-dark">
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
                        @if ($contato->status == "Não Lido")
                            <td class="status" style="color: red; font-weight: bold">{{ $contato->status }}</td>
                        @else
                            <td class="status" style="color: green; font-weight: bold">{{ $contato->status }}</td>
                        @endif
                        <td id="nome">{{ $contato->nome }}</td>
                        <td id="email">{{ $contato->email }}</td>
                        <td id="assunto">{{ $contato->assunto }}</td>
                        <td>{{date('d M Y, H:i', strtotime($contato->created_at)) }}</td>
                        <td>
                            <a href="{{ route('contato.show', ['id' => $contato->id]) }}">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</body>

</html>
