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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;800&display=swap" rel="stylesheet">
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
                <li><a href="index.html">INICIO</a></li>
                <li><a href="projetos.html">PROJETOS</a></li>
                <li><a href="contato.html" id="navbar-ativo">CONTATO</a></li>
            </ul>
        </div>
    </nav>

    <div class="container-criar">
        <div class="form">
            <h1 class="titulo">
                <div class="destaque"></div>Criar Projeto
            </h1>
            <form action="{{ route('projeto.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="inputs">
                    <div class="name">
                        <label for="titulo">Titulo <span>*</span></label>
                        <br>
                        <input type="text" placeholder="Digite aqui..." name="titulo" value="{{ old('titulo') }}">
                    </div>



                    <div class="sub">

                        <div class="descricao">
                            <label for="descricao">Descrição<span>*</span></label>
                            <br>
                            <textarea name="descricao"  id="descricao" cols="55" rows="15"></textarea>
                        </div>


                        <div class="data-img">
                            <div class="data">

                                <div class="inicio">
                                    <label for="data_inicio">Data Inicio</label>
                                    <br>
                                    <input type="date" name="data_inicio" id="data_inicio" value="{{ old('data_inicio') }}">
                                </div>

                                <div class="final">
                                    <label for="data_final">Data Final</label>
                                    <br>
                                    <input type="date" name="data_final" id="data_final" value="{{ old('final') }}">
                                </div>
                            </div>

                            <div class="img-input">
                                <label for="img_principal">Imagem Principal<span>*</span></label>
                                <br>
                                <input type="file" name="img_principal" id="img_principal">
                            </div>



                            <div class="img-input">
                                <label for="img_secundaria">Imagem Secundaria</label>
                                <br>
                                <input type="file" name="img_secundaria" id="img_secundaria">
                            </div>


                        </div>

                    </div>


                </div>

                <div class="btns">
                    <a href="{{ route('projeto.index') }}">Cancelar</a>
                    <button type="submit">Enviar</button>
                </div>
            </form>

        </div>

    </div>

    <h1>Criar Projeto</h1>

   

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

</body>

</html>
