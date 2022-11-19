<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Criar Projeto</h1>

    <form action="{{ route('projeto.store') }}" method="POST">
        @csrf
        <input type="text" placeholder="titulo" name="titulo">
        <input type="text" placeholder="descricao" name="descricao">
        <input type="text" placeholder="img_principal" name="img_principal">
        <input type="text" placeholder="img_secundaria" name="img_secundaria">
        <input type="text" placeholder="img_terciaria" name="img_terciaria">
        <input type="text" placeholder="img_quaternaria" name="img_quaternaria">
        <input type="text" placeholder="data_inicio" name="data_inicio">
        <input type="text" placeholder="data_final" name="data_final">
        <button type="submit">Criar</button>
    </form>

</body>
</html>