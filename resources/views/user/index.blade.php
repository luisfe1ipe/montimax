@extends('user.layouts.navbar')

@section('content')
    <section class="img-painel">
        <div class="container-painel">
            <div class="conteudo-painel">
                <h1>Precisa de algo ? Entre em contato</h1>
                <form action="{{ route('contato') }}">
                    <button type="submit">Contato</button>
                </form>
            </div>
        </div>
    </section>

    <div class="container-section">
        <div class="container-about">
            <h1 class="titulo">
                <div class="destaque"></div>Sobre Nós
            </h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim aut est illo quidem culpa dolor dolores nam
                odio porro commodi recusandae dignissimos quibusdam sequi id explicabo, adipisci quam error aliquid!
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio sed sequi quibusdam id voluptas ut,
                harum aliquid perspiciatis officia itaque tenetur, quo animi quos amet? Vitae error reiciendis temporibus
                aspernatur.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam libero molestias veniam modi totam,
                voluptatum quo, soluta sit eveniet, dolores aspernatur consequuntur aut? Quam, repudiandae incidunt
                assumenda commodi ipsa at!
            </p>
        </div>
        <div class="container-projetos">
            <h1 class="titulo">
                <div class="destaque"></div>Projetos
            </h1>
            <div class="list-projetos">

                <a href="/visualizar-projeto.html" class="link-projeto">
                    <div class="projeto">
                        <img src="/assets/img/projeto.png" alt="">
                        <div class="container-desc">
                            <div class="sub">
                                <div class="data">
                                    <img src="/assets/svg/calendario.svg" alt="">
                                    <p>2022</p>
                                </div>
                                <div class="categoria">
                                    <p>Quimica e Petroquimicas</p>
                                </div>
                            </div>
                            <div class="descricao">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur aliquid nam officia
                                    amet. Modi nemo
                                    quis ipsum facere ipsa et possimus quod quas illum dolorem, natus provident similique
                                    saepe laudantium?
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi numquam quo quod eligendi
                                    quisquam
                                    quibusdam at fugit ullam doloribus deserunt similique repellendus accusantium
                                    voluptates, distinctio
                                    ducimus iure saepe libero reprehenderit!
                                </p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="" class="link-projeto">
                    <div class="projeto">
                        <img src="/assets/img/projeto.png" alt="">
                        <div class="container-desc">
                            <div class="sub">
                                <div class="data">
                                    <img src="/assets/svg/calendario.svg" alt="">
                                    <p>2022</p>
                                </div>
                                <div class="categoria">
                                    <p>Quimica e Petroquimicas</p>
                                </div>
                            </div>
                            <div class="descricao">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur aliquid nam officia
                                    amet. Modi nemo
                                    quis ipsum facere ipsa et possimus quod quas illum dolorem, natus provident similique
                                    saepe laudantium?
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi numquam quo quod eligendi
                                    quisquam
                                    quibusdam at fugit ullam doloribus deserunt similique repellendus accusantium
                                    voluptates, distinctio
                                    ducimus iure saepe libero reprehenderit!
                                </p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="" class="link-projeto">
                    <div class="projeto">
                        <img src="/assets/img/projeto.png" alt="">
                        <div class="container-desc">
                            <div class="sub">
                                <div class="data">
                                    <img src="/assets/svg/calendario.svg" alt="">
                                    <p>2022</p>
                                </div>
                                <div class="categoria">
                                    <p>Quimica e Petroquimicas</p>
                                </div>
                            </div>
                            <div class="descricao">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur aliquid nam officia
                                    amet. Modi nemo
                                    quis ipsum facere ipsa et possimus quod quas illum dolorem, natus provident similique
                                    saepe laudantium?
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi numquam quo quod eligendi
                                    quisquam
                                    quibusdam at fugit ullam doloribus deserunt similique repellendus accusantium
                                    voluptates, distinctio
                                    ducimus iure saepe libero reprehenderit!
                                </p>
                            </div>
                        </div>
                    </div>
                </a>


            </div>
            <div class="view-all">
                <form action="/projetos.html">
                    <button class="all-button">Ver todos projetos</button>
                </form>
            </div>
        </div>
    </div>


    <script src="/assets/js/mobile-navbar.js"></script>
@endsection
