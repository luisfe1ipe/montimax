<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $projeto->titulo }} - MONTIMAX</title>

    <link rel="icon" href="/assets/svg/M.svg">
    <link rel="stylesheet" href="/assets/css/navbar-footer.css">
    <link rel="stylesheet" href="/assets/css/visualizar-projeto.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;800&display=swap" rel="stylesheet">

</head>

<body>

    <div class="border-bottom border-danger fixed-top bg-white">
        <div class="container-sm">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="/assets/img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link nav-active" aria-current="page" href="#">Inicio</a>
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



    <div class="container-sm">
        <div class="container-projeto">
            <div class="titulo-projeto">
                <h1>{{ $projeto->titulo }}</h1>
            </div>
            <div class="data w-100 pt-3  d-flex align-items-center justify-content-between">
                @if ($projeto->data_inicio)
                    <p><strong>Data inicio: </strong>{{ $projeto->data_inicio = date('d M Y') }}</p>
                @endif
                @if ($projeto->data_final)
                    <p><strong>Data final: </strong>{{ $projeto->data_final = date('d M Y') }}</p>
                @endif
            </div>

            <div class="projeto">
                <div class="descricao mt-3 mb-5">
                    <p>
                        {{$projeto->descricao}}
                    </p>
                </div>
                <div class="foto-projeto">
                    <div class="container-sm d-flex justify-content-center">
                        <div id="carouselExampleControls"
                        class="carousel slide d-flex justify-content-center align-content-center"
                        data-bs-ride="carousel">
                        <div class="carousel-inner" style="width: 600px; height:400px; ">
                            <div class="carousel-item active">
                                <img src="{{ asset("img-projetos/principal/{$projeto->img_principal}") }}"
                                    class="d-block w-100 h-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset("img-projetos/secundaria/{$projeto->img_secundaria}") }}"
                                    class="d-block w-100 h-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-danger" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-danger" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="btns pt-5">
            <a href="{{ route('projeto.edit', ['id' => $projeto->id]) }}" class="btn btn-dark">Editar</a>
            <form action="{{ route('projeto.delete', $projeto->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn bg-danger">Excluir</button>
            </form>
        </div>
    </div>




    <script src="/assets/js/mobile-navbar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
