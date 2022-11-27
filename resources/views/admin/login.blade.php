<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin - Montimax</title>
</head>
<body>
    
    <div class="container-sm">
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

            <div class="btns">
                <button type="submit" class="btn btn-success">Logar</button>
            </div>

        </form>
    </div>

</body>
</html>