<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="/assets/css/criar-projeto.css">
    <link rel="stylesheet" href="/assets/css/navbar-footer.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>


    <div class="border-bottom border-danger fixed-top bg-white">
        <div class="container-sm">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid container-sm">
                    <a class="navbar-brand" href="#"><img src="/assets/img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="">
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


    <div class="container-sm mt-5">
        <h1 class="pt-5">Criar Projeto</h1>
        <form action="{{ route('projeto.store') }}" method="POST" enctype="multipart/form-data" class="pt-2">
            @csrf
            <div class="pt-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" name="titulo" class="form-control" id="" required>
            </div>
            <div class="pt-3">
                <label for="descricao" class="form-label">Descricão</label>
                <textarea class="form-control" name="descricao" id="" rows="8" required></textarea>
            </div>

            <div class="pt-3">
                <label for="img_principal" class="form-label">Foto Principal</label>
                <input class="form-control" name="img_principal" type="file" id="formFile" required>
            </div>

            <div class="pt-3">
                <label for="img_secundaria" class="form-label">Foto Secundaria</label>
                <input class="form-control" name="img_secundaria" type="file" id="formFile">
            </div>

            <div class="data container-sm">
                <div class="inicio">
                    <label for="data_inicio">Data Inicio</label>
                    <input type="date" name="data_inicio" id="">
                </div>
                <div class="termino">
                    <label for="data_final">Data Final</label>
                    <input type="date" name="data_final" id="">
                </div>
            </div>

            <div class="btns">
                <a class="btn btn-dark" href="{{ route('projeto.index') }}">Cancelar</a>
                <button type="submit" class="btn btn-success">Criar</button>
            </div>
        </form>


    </div>


</body>

</html>
