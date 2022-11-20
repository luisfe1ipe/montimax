<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Editar Projeto {{$projeto->titulo}}</h1>

    <form action="{{ route('projeto.update', $projeto->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <input type="text" placeholder="titulo" name="titulo" value="{{ $projeto->titulo }}">
        <input type="text" placeholder="descricao" name="descricao" value="{{ $projeto->descricao }}">
        <input type="file" placeholder="img_principal" name="img_principal" value="{{ $projeto->img_principal }}">
        <input type="file" placeholder="img_secundaria" name="img_secundaria" value="{{ $projeto->img_secundaria }}">
        <input type="text" placeholder="data_inicio" name="data_inicio" value="{{ $projeto->data_inicio }}">
        <input type="text" placeholder="data_final" name="data_final" value="{{ $projeto->data_final }}">
        <button type="submit">Editar</button>
    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

</body>
</html>