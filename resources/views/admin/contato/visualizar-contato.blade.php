<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - MONTIMAX</title>
    
    <link rel="icon" href="/assets/svg/M.svg">
    <link rel="stylesheet" href="/assets/css/navbar-footer.css">
    <link rel="stylesheet" href="/assets/css/visualizar-contato.css">

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <!-- FONTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    
    
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

    <div class="container-sm mt-5">
        <h1 class="pt-5">Visualizar Contato</h1>
       
            <div class="pt-3">
                <label for="" class="form-label">Nome</label>
                <input type="text" name="" class="form-control" id="" value="{{ $contato->nome }}" readonly> 
            </div>
            <div class="pt-3">
                <label for="" class="form-label">Telefone</label>
                <input type="text" class="form-control" name="" id="" value="{{ $contato->telefone }}" readonly></input>
            </div>

            <div class="pt-3">
                <label for="" class="form-label">E-mail</label>
                <input class="form-control" name="" type="text" id="" value="{{ $contato->email }}" readonly>
            </div>

            <div class="pt-3">
                <label for="" class="form-label">Assunto</label>
                <input class="form-control" name="" type="text" id="" value="{{ $contato->assunto }}" readonly>
            </div>

            <div class="pt-3">
                <label for="" class="form-label">Mensagem</label>
                <textarea class="form-control" name="" id="" rows="8" readonly>{{ $contato->mensagem }}</textarea>
            </div>

            
        <form action="{{ route('contato.update', $contato->id) }}" method="POST"  enctype="multipart/form-data" class="pt-2">
            <div class="pt-3">
                <label for="">Status</label>
                <select name="status" class="form-select mt-2" aria-label="Default select example" required>
                    <option value="" ></option>
                    <option value="0" >Não Lido</option>
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
   

  

       

    <footer>
        <p>(18) 99999-9999</p>
        <p>exemplo@gmail.com</p>
        <p>Rua xxxxxxx, XX - Tarumã - SP</p>
    </footer>

    <script src="/assets/js/mobile-navbar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>