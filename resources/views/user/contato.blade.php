<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - MONTIMAX</title>

    <link rel="icon" href="/assets/svg/M.svg">
    <link rel="stylesheet" href="/assets/css/navbar-footer.css">
    <link rel="stylesheet" href="/assets/css/contato.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <script src="{{ URL::asset('https://code.jquery.com/jquery-3.6.1.min.js') }}"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('assets/js/jquery.mask.js') }}"></script>
    <script>
        $(function() {
            $('#phone').mask('(00) 00000-0000');
        });
    </script>


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
                                <a class="nav-link nav-active" href="{{ route('contato.create') }}">Contato</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="container-contato">
        <div class="form">
            <h1 class="titulo">
                <div class="destaque"></div>Form. Contato
            </h1>
            <form action="{{ route('contato.create') }}" method="POST">
                @csrf
                <div class="inputs">
                    <div class="name">
                        <label for="nome">Nome</label>
                        <br>
                        <input type="text" value="{{ old('nome') }}" class="form-control
                            @if ($errors->has('nome')) 
                                is-invalid
                            @endif
                        " placeholder="Digite aqui..." name="nome">
                        @if ($errors->has('nome'))
                            @foreach ($errors->get('nome') as $error)
                            <div id="validationServer03Feedback" class="invalid-feedback pt-1">
                                <p>{{ $error }}</p>
                            </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="telefone">
                        <label for="telefone">Telefone</label>
                        <br>
                        <input type="text" value="{{ old('telefone') }}" id="phone" class="form-control
                            @if ($errors->has('nome')) 
                                is-invalid
                            @endif
                        " placeholder="(99) 99999-9999" name="telefone">
                        @if ($errors->has('telefone'))
                            @foreach ($errors->get('telefone') as $error)
                            <div id="validationServer03Feedback" class="invalid-feedback pt-1">
                                <p>{{ $error }}</p>
                            </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="email">
                        <label for="email">Email</label>
                        <br>
                        <input type="email" value="{{ old('email') }}"  class="form-control
                            @if ($errors->has('email')) 
                                is-invalid
                            @endif
                        " placeholder="Digite aqui..." name="email">
                        @if ($errors->has('email'))
                            @foreach ($errors->get('email') as $error)
                            <div id="validationServer03Feedback" class="invalid-feedback pt-1">
                                <p>{{ $error }}</p>
                            </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="assunto">
                        <label for="assunto">Assunto</label>
                        <br>
                        <input type="text" value="{{ old('assunto') }}"  class="form-control
                            @if ($errors->has('assunto')) 
                                is-invalid
                            @endif
                        " placeholder="Digite aqui..." name="assunto">
                        @if ($errors->has('assunto'))
                            @foreach ($errors->get('assunto') as $error)
                            <div id="validationServer03Feedback" class="invalid-feedback pt-1">
                                <p>{{ $error }}</p>
                            </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="mensagem">
                        <label for="mensagem">Mensagem</label>
                        <br>
                        <textarea name="mensagem" class="form-control
                            @if ($errors->has('mensagem')) 
                                is-invalid
                            @endif
                        " rows="3"> {{ old('mensagem') }} </textarea>
                        @if ($errors->has('mensagem'))
                            @foreach ($errors->get('mensagem') as $error)
                            <div id="validationServer03Feedback" class="invalid-feedback pt-2">
                                <p>{{ $error }}</p>
                            </div>
                            @endforeach
                        @endif

                    </div>
                </div>
                <center>
                    <button type="submit" class="custom-red btn w-25 m-3 ">Enviar</button>
                </center>
            </form>

        </div>


        <div class="container-info">
            <h1 class="titulo">
                <div class="destaque"></div>Info. Contato
            </h1>
            <div class="info">
                <p>exemplo@gmail.com.br</p>
                <p>Rua xxxxxxx, XX</p>
                <p>Tarumã, São Paulo</p>
            </div>
            <p id="telefone"><strong>Telefone:</strong> (18) 99999-9999</p>
        </div>
    </div>

        

    <footer class="text-center text-lg-start bg-light text-muted">
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
