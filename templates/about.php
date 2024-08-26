<?php /* Template Name: Sobre */ ?>

<?php get_header(); ?>

<div class="secao-sobre py-5">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nossa história</li>
            </ol>
        </nav>
        <h1 class="secao-titulo mb-4">
            Nossa história
        </h1>
        <div class="row">
            <div class="col-md-8">
                <p>
                    O Núcleo Avançado de Inovação Tecnológica (NAVI) é um laboratório voltado para o desenvolvimento
                    de sistemas e tecnologias ligadas à inovação, que tem como objetivo colaborar com o ensino,
                    pesquisa e extensão, tendo como base: desenvolver, propor, implementar, avaliar e aprimorar
                    conhecimento em tecnologia.
                </p>
                <p>
                    Criado no ano de 2014, está localizado no Campus Natal-Central, mas sua rede de conhecimento
                    ultrapassa as barreiras físicas e reúne mentes brilhantes de diversos campi do Rio Grande do
                    Norte.
                </p>
                <p>
                    Durante os cinco anos de atuação, o NAVI teve destaque nacional e internacional, como é o caso
                    do projeto da Plataforma de Livre-Trânsito de Profissionais no MERCOSUL, responsável pelo
                    desenvolvimento de um sistema de informação que será responsável pela gestão do livre trânsito
                    dos profissionais de saúde dos cinco países participantes. O projeto é realizado em parceria com
                    a Organização Pan-Americana da Saúde (OPAS) e Ministério da Saúde.
                </p>
                <p>
                    A atuação do núcleo também englobou o desenvolvimento de importantes produtos e parcerias, como
                    a Mesa de Negociadores e Rede Observa. Os sistemas web foram desenvolvidos em parceria com o
                    Ministério da Saúde.
                </p>
                <p>
                    O laboratório traz como estratégia propulsora, inovação e ciência como ponte entre tecnologias,
                    engenharias e necessidades diárias. Junto com parceiros da indústria, laboratórios de inovação
                    nacionais e internacionais e agências de pesquisa governamentais, contando com toda a
                    infraestrutura do Instituto Federal de Educação, o NAVI oferece instalações, equipamentos,
                    pessoal especializado para dar suporte e inspirar a consolidação de parcerias, a criação e a
                    colaboração.
                </p>
                <p>
                    Com base em plataformas e formatos de colaboração específicos, convidamos os alunos junto com os
                    supervisores a enviar projetos a serem desenvolvidos com o apoio da equipe NAVI.
                </p>
            </div>
            <div class="col gap-4 d-flex flex-column">
                <img src="<?= $base_url . '/src/imgs/about-0.jpeg' ?>" class="img-fluid" alt="">
                <div class="card card-numeros">
                    <div class="card-body p-5">
                        <div class="row">
                            <div class="col">
                                <h1 class="card-numero-titulo">
                                    <img src="<?= $base_url . '/src/imgs/chemistry.svg' ?>" alt="">
                                    +8
                                </h1>
                                <h6 class="card-numero-subtitulo">
                                    Projetos de pesquisa
                                </h6>
                            </div>
                            <div class="col">
                                <h1 class="card-numero-titulo">
                                    <img src="<?= $base_url . '/src/imgs/computer.svg' ?>" alt="">
                                    +8
                                </h1>
                                <h6 class="card-numero-subtitulo">
                                    Projetos de pesquisa
                                </h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h1 class="card-numero-titulo">
                                    <img src="<?= $base_url . '/src/imgs/paper.svg' ?>" alt="">
                                    +8
                                </h1>
                                <h6 class="card-numero-subtitulo">
                                    Projetos de pesquisa
                                </h6>
                            </div>
                            <div class="col">
                                <h1 class="card-numero-titulo">
                                    <img src="<?= $base_url . '/src/imgs/earth.svg' ?>" alt="">
                                    +8
                                </h1>
                                <h6 class="card-numero-subtitulo">
                                    Projetos de pesquisa
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-sobre my-5">
            <div class="col">
                <div class="icon-sobre">
                    <img src="<?= $base_url . '/src/imgs/note.svg' ?>" alt="">
                </div>
                <h3>
                    Missão
                </h3>
                <span>
                    Promover ações que fomentem a ciência e a inovação de modo a criar conexões e oportunidades.
                </span>
            </div>
            <div class="col">
                <div class="icon-sobre">
                    <img src="<?= $base_url . '/src/imgs/medal.svg' ?>" alt="">
                </div>
                <h3>
                    Valores
                </h3>
                <span>
                    Desenvolver ciência e inovação pautada em valores éticos, com foco na transformação e avanços
                    sociais.
                </span>
            </div>
            <div class="col">
                <div class="icon-sobre">
                    <img src="<?= $base_url . '/src/imgs/rocket.svg' ?>" alt="">
                </div>
                <h3>
                    Visão
                </h3>
                <span>
                    Tornar-se um grupo de excelência em pesquisa com reconhecimento nacional e internacional.
                </span>
            </div>
        </div>
    </div>
</div>
<div class="secao-citacoes py-5">
    <div class="container">
        <div class="swiper citacoesSwiper mx-5">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="row mx-5 gap-5">
                        <div class="col-1">

                        </div>
                        <div class="col-4">
                            <div class="d-flex">
                                <img class="ms-auto img-fluid" src="https://placehold.co/400x300" alt="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-center gap-3">
                                <img class="" src="imgs/aspas.png" alt="">
                                <h5>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book.”
                                </h5>
                            </div>
                            <h6>
                                Yasmim Morais
                            </h6>
                            <small>
                                Pesquisadora | NAVI
                            </small>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    t
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>

<?php get_footer() ?>