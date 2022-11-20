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


    <!-- FONTES -->
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
                <li><a href="index.html" >Início</a></li>
                <li><a href="{{ route('projeto.index') }}">Projetos</a></li>
                <li><a href="{{ route('contato.create') }}" id="navbar-ativo">Contato</a></li>
            </ul>
        </div>
    </nav>

    <div class="container-contato">
        <div class="form">
            <h1 class="titulo"><div class="destaque"></div>Form. Contato</h1>
            <form action="{{ route('contato.create') }}" method="POST">
                @csrf
                <div class="inputs">
                    <div class="name">
                        <label for="nome">Nome <span>*</span></label>
                        <br>
                        <input type="text" name="nome" id="name" required>
                    </div>
                    <div class="telefone">
                        <label for="telefone">Telefone<span>*</span></label>
                        <br>
                        <input type="text" name="telefone" id="phone" required>
                    </div>
                    <div class="email">
                        <label for="email">E-mail<span>*</span></label>
                        <br>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="assunto">
                        <label for="assunto">Assunto<span>*</span></label>
                        <br>
                        <input type="text" name="assunto" id="subject" required>
                    </div>
                    <div class="mensagem">
                        <label for="mensagem">Mensagem<span>*</span></label>
                        <br>
                        <textarea name="mensagem" id="message" cols="106" rows="15" required></textarea>
                    </div>
                </div>
                <center>
                    <button>Enviar</button>
                </center>
            </form>
            
        </div>

  

        <div class="container-info">
            <h1 class="titulo"><div class="destaque"></div>Info. Contato</h1>
            <div class="info">
                <p>exemplo@gmail.com.br</p>
                <p>Rua xxxxxxx, XX</p>
                <p>Tarumã, São Paulo</p>
            </div>
            <p id="telefone"><strong>Telefone:</strong> (18) 99999-9999</p>
            <div class="btn">
                <a href=" {{ route('contato.index') }}">
                    <button>Ver todos contatos</button>
                </a>
            </div>
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