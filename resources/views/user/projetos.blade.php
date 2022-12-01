<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos - MONTIMAX</title>

    <link rel="icon" href="/assets/svg/M.svg">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">


    <script src="{{ URL::asset('https://code.jquery.com/jquery-3.6.1.min.js') }}"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="/assets/css/navbar-footer.css">
    <link rel="stylesheet" href="/assets/css/projetos.css">



    <script>
        $(document).ready(function() {
            $('.actionsProjetoBtn').click(function(e) {
                e.preventDefault();

                var projeto_id = $(this).val();
                $('.projeto_id').val(projeto_id);
                $('#deleteModal').modal('show');
            });
        });
    </script>

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

    <div class="container-sm">
        <div class="row">
            <div class="pesquisar">
                <form action="{{ route('projeto.index') }}" method="get">
                    <input type="text" name="search" id="" placeholder="Digite aqui...">
                    <button class="">Pesquisar</button>
                </form>
            </div>
        </div>
    </div>

    @if (count($projetos) == 0)
        <div class="alert alert-danger d-flex align-items-center justify-content-center w-25" role="alert" style="margin: 24px auto">
            <i class="fas fa-exclamation-circle" style="font-size: 24px; padding-right:20px"></i>
            <div>
                Nenhum projeto encontrado
            </div>
        </div>
        
    @endif




    <div class="container-sm">
        @foreach ($projetos as $projeto)
            <div class="container-projeto">
                <a href="{{ route('projeto.show', ['id' => $projeto->id]) }}">
                    <div class="img-projeto">
                        <img src="{{ asset("img-projetos/principal/{$projeto->img_principal}") }}" alt="">
                    </div>
                </a>
                <div class="conteudo-projeto container-sm">
                    <a href="{{ route('projeto.show', ['id' => $projeto->id]) }}" id="texto-projeto">
                        <div>
                            <h4>
                                {{ $projeto->titulo }}
                            </h4>
                            <p>
                                {{ $projeto->descricao }}
                            </p>
                        </div>
                    </a>
                    <div class="categoria-data">
                        @auth
                            <div class="excluir">
                                <button type="button" value="{{ $projeto->id }}" class="custom-red botao actionsProjetoBtn"
                                    id="btn-p" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class='fas fa-cog'></i>
                                    Ações
                                </button>
                            </div>
                        @endauth
                        <span><strong>Publicado:</strong> {{ $projeto->created_at = date('d/m/Y') }}</span>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        O que deseja fazer ?
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Caso queira excluir, tenha em mente que será excluido <strong>permanentemente.</strong>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <form action="{{ route('projeto.delete') }}" method="POST">
                        @csrf
                        <input type="hidden" name="projeto_action_id" class="projeto_id">
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                    <form action="{{ route('projeto.edit') }}" method="GET">
                        <input type="hidden" name="projeto_action_id" class="projeto_id">
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-sm mt-5">
        <div class="paginacao">
            {{ $projetos->appends([
                    'search' => request()->get('search', ''),
                ])->links('pagination::bootstrap-5') }}
        </div>
    </div>


    <footer class="w-100 text-center text-lg-start text-muted">
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
