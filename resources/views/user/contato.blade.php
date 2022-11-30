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

    <!-- FONTES -->
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
        <div class="container-sm ">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid container-sm">
                    <a class="navbar-brand" href="#"><img src="/assets/img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="" id="navbarNav">
                        <ul class="navbar-nav">
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

    <div class="container-contato">

        <div class="form">
            <h1 class="titulo">
                <div class="destaque"></div>Form. Contato
            </h1>
            <form action="{{ route('contato.create') }}" method="POST">
                @csrf
                <div class="inputs">
                    <div class="name">
                        <label for="nome">Nome <span>*</span></label>
                        <br>
                        <input type="text" name="nome" id="name"
                            class="@if ($errors->has('nome')) alert alert-danger border-danger @endif">
                        @if ($errors->has('nome'))
                            @foreach ($errors->get('nome') as $error)
                                <p class="text-danger" role="alert">{{ $error }}</p>
                            @endforeach
                        @endif
                    </div>
                    <div class="telefone">
                        <label for="telefone">Telefone<span>*</span></label>
                        <br>
                        <input type="text" name="telefone" id="phone" value="{{ old('telefone') }}"
                            class="@if ($errors->has('telefone')) alert alert-danger border-danger @endif">
                        @if ($errors->has('telefone'))
                            @foreach ($errors->get('telefone') as $error)
                                <p class="text-danger " role="alert">{{ $error }}</p>
                            @endforeach
                        @endif
                    </div>
                    <div class="email">
                        <label for="email">E-mail<span>*</span></label>
                        <br>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                            class="@if ($errors->has('email')) alert alert-danger border-danger @endif">
                        @if ($errors->has('email'))
                            @foreach ($errors->get('email') as $error)
                                <p class="text-danger " role="alert">{{ $error }}</p>
                            @endforeach
                        @endif
                    </div>
                    <div class="assunto">
                        <label for="assunto">Assunto<span>*</span></label>
                        <br>
                        <input type="text" name="assunto" id="subject" value="{{ old('assunto') }}"
                            class="@if ($errors->has('assunto')) alert alert-danger border-danger @endif">
                        @if ($errors->has('assunto'))
                            @foreach ($errors->get('assunto') as $error)
                                <p class="text-danger " role="alert">{{ $error }}</p>
                            @endforeach
                        @endif
                    </div>
                    <div class="mensagem">
                        <label for="mensagem">Mensagem<span>*</span></label>
                        <br>
                        <textarea name="mensagem" id="message" cols="106" rows="15"
                            class="p-2 @if ($errors->has('mensagem')) alert alert-danger border-danger @endif">{{ old('mensagem') }}</textarea>
                        @if ($errors->has('mensagem'))
                            @foreach ($errors->get('mensagem') as $error)
                                <p class="text-danger " role="alert">{{ $error }}</p>
                            @endforeach
                        @endif

                    </div>
                </div>
                <center>
                    <button type="submit" class="btn w-25 m-3" id="btn-p">Enviar</button>
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
            @auth
                <div class="d-flex justify-content-center">
                    <a href=" {{ route('contato.index') }}" class="btn btn-danger">Ver contatos</a>
                </div>
            @endauth
        </div>
    </div>

    <footer>
        <p>(18) 99999-9999</p>
        <p>exemplo@gmail.com</p>
        <p>Rua xxxxxxx, XX - Tarumã - SP</p>
    </footer>

    <script src="/assets/js/mobile-navbar.js"></script>

</body>

</html>
