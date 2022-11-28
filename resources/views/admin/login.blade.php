<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin - Montimax</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/navbar-footer.css">
    <link rel="stylesheet" href="/assets/css/login.css">
</head>
<body>

    <div class="container-sm d-flex align-items-center justify-content-center " style="height: 500px; margin-top:50px">
        <div class="login-container">
            <div class="header d-flex flex-column align-items-center justify-content-center">
                <img src="/assets/img/logo.png" alt="">
                <p class="mt-3">Login Administrativo</p>
            </div>
            <form action="" method="POST" enctype="multipart/form-data" class="pt-2">
                @csrf
                <div class="pt-3">
                    <label for="E-mail" class="form-label">E-mail</label>
                    <input type="email" name="email" class="form-control" id="" required>
                </div>
                <div class="pt-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" name="password" id="" rows="8" required>
                </div>
    
                <div class="btns d-flex justify-content-center mt-5 mb-4">
                    <button type="submit" class="btn btn-p w-100">Entrar</button>
                </div>

                <center>
                    <a href="{{ route('home') }}" class="text-dark">Continuar sem conta</a>
                </center>
    
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>