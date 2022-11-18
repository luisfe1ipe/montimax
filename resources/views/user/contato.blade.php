@extends('user.layouts.navbar')

@section('content')

<div class="container-contato">
    <div class="form">
        <h1 class="titulo">
            <div class="destaque"></div>Form. Contato
        </h1>
        <form action="">
            <div class="inputs">
                <div class="name">
                    <label for="name">Nome <span>*</span></label>
                    <br>
                    <input type="text" name="name" id="name" required>
                </div>
                <div class="telefone">
                    <label for="phone">Telefone<span>*</span></label>
                    <br>
                    <input type="text" name="phone" id="phone" required>
                </div>
                <div class="email">
                    <label for="email">E-mail<span>*</span></label>
                    <br>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="assunto">
                    <label for="subject">Assunto<span>*</span></label>
                    <br>
                    <input type="text" name="subject" id="subject" required>
                </div>
                <div class="mensagem">
                    <label for="message">Mensagem<span>*</span></label>
                    <br>
                    <textarea name="message" id="message" cols="106" rows="15" required></textarea>
                </div>
            </div>
            <center>
                <button>Enviar</button>
            </center>
        </form>

    </div>



    <div class="container-info">
        <h1 class="titulo">
            <div class="destaque"></div>Info. Contato
        </h1>
        <div class="info">
            <p>exemplo@gmail.com.br</p>
            <p>Rua xxxxxxx, XX</p>
            <p>Tarumã, São Paulo</p>
        </div>
        <p id="telefone"><strong>Telefone:</strong> (18) 99999-9999</p>
    </div>
</div>



@endsection