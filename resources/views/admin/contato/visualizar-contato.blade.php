<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Visualizar Contato - MONTIMAX</title>

    <link rel="icon" href="/assets/svg/M.svg">
    {{-- <link rel="stylesheet" href="/assets/css/navbar-footer.css"> --}}
    <link rel="stylesheet" href="/assets/css/visualizar-contato.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <!-- FONTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/navbar-footer.css">
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

    <div class="container-sm mt-5">
        <h1 class="pt-5">Visualizar Contato</h1>

        <div class="pt-3">
            <label for="" class="form-label">Nome</label>
            <input type="text" name="" class="form-control" id="" value="{{ $contato->nome }}"
                readonly>
        </div>
        <div class="pt-3">
            <label for="" class="form-label">Telefone</label>
            <input type="text" class="form-control" name="" id="" value="{{ $contato->telefone }}"
                readonly></input>
        </div>

        <div class="pt-3">
            <label for="" class="form-label">E-mail</label>
            <input class="form-control" name="" type="text" id="" value="{{ $contato->email }}"
                readonly>
        </div>

        <div class="pt-3">
            <label for="" class="form-label">Assunto</label>
            <input class="form-control" name="" type="text" id="" value="{{ $contato->assunto }}"
                readonly>
        </div>

        <div class="pt-3">
            <label for="" class="form-label">Mensagem</label>
            <textarea class="form-control" name="" id="" rows="8" readonly>{{ $contato->mensagem }}</textarea>
        </div>


        <form action="{{ route('contato.update', $contato->id) }}" method="POST" enctype="multipart/form-data"
            class="pt-2">
            <div class="pt-3">
                <label for="">Status</label>
                <select name="status" class="form-select mt-2" aria-label="Default select example" required>
                    <option value=""></option>
                    <option value="0">Não Lido</option>
                    <option value="1">Lido</option>
                </select>
            </div>


            @method('PUT')
            @csrf
            <div class="btns d-flex justify-content-between mt-5">
                <a class="btn btn-dark" href="{{ route('contato.index') }}">Voltar</a>
                <button type="submit" class="btn btn-success">Confirmar</button>
            </div>
        </form>

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
