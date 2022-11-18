@extends('user.layouts.navbar')

@section('content')

<div class="container">

    <div class="container-titulo">
        <h1 class="titulo">
            <div class="destaque"></div>Nossos Projetos
        </h1>
        <p>Todos os nossos projetos são feitos de acordo com as regulamentações</p>
    </div>

    <div class="container-projeto">
        <a href="/visualizar-projeto.html">
            <div class="img-projeto">
                <img src="/img/projeto.png" alt="">
            </div>
        </a>
        <a href="{{ route('ver-projeto') }}">
            <div class="conteudo-projeto">
                <h1>Titulo projeto</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odio placeat nam fugiat eos iste
                    suscipit magni
                    ratione non voluptatum distinctio sit voluptate, natus dolor sunt, blanditiis voluptatibus in. Hic.
                    Lorem ipsum,
                    dolor sit amet consectetur adipisicing elit. Illodawdwa debitis officiis architecto doloribus
                    delectus voluptatibus
                    veniam, sequi magnam veritatis fuga reiciendis a eius. Exercitationem reprehenderit atque eaque!
                    Officiis, magnam
                    vitae?
                </p>
                <div class="categoria-data">
                    <img src="/svg/calendario.svg" alt="">
                    <span>25/10/2022</span>
                </div>
            </div>
        </a>
    </div>


</div>

@endsection