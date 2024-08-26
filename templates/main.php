<?php /* Template Name: Pagina Principal */ ?>

<?php

get_header();

$uri = get_template_directory_uri()

    ?>

<div class="secao secao-main">
    <div class="bg-el bg-el-0"></div>
    <div class="bg-el bg-el-1"></div>
    <div class="bg-el bg-el-2"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="secao-main-text">
                    <div>
                        <h1 class="secao-titulo secao-main-titulo-1">
                            Desenvolvendo
                        </h1>
                        <h1 class="secao-titulo secao-main-titulo-2">
                            Inovação e Tecnologia
                        </h1>
                    </div>
                    <h4 class="secao-subtitulo">
                        Descubra como nossos projetos inovadores estão moldando o futuro, integrando tecnologia de
                        ponta
                        e
                        soluções criativas para enfrentar os desafios contemporâneos.
                    </h4>
                    <a href="/projetos" class="btn btn-primary">
                        VER PROJETOS
                    </a>
                    <?php
                    get_template_part('/partials/social-icons')
                        ?>
                </div>
            </div>
            <div class="col">
                <div class="img-containers">
                    <div class="div img-container img-container-0">
                        <img class="" src="<?= $uri . '/src/imgs/header-0.png' ?>" alt="bolha 0" />
                    </div>
                    <div class="div img-container img-container-1">
                        <img class="" src="<?= $uri . '/src/imgs/header-1.jpeg' ?>" alt="bolha 1" />
                    </div>
                    <div class="div img-container img-container-2">
                        <img class="" src="<?= $uri . '/src/imgs/header-0.png' ?>" alt="bolha 2" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-numeros">
        <div class="card-body">
            <div class="row">
                <div class="col-6 col-md-3">
                    <h1 class="card-numero-titulo">
                        <img src="<?= $uri . '/src/imgs/chemistry.svg' ?>" alt="">
                        +8
                    </h1>
                    <h6 class="card-numero-subtitulo">
                        Projetos de pesquisa
                    </h6>
                </div>
                <div class="col-6 col-md-3">
                    <h1 class="card-numero-titulo">
                        <img src="<?= $uri . '/src/imgs/computer.svg' ?>" alt="">
                        +8
                    </h1>
                    <h6 class="card-numero-subtitulo">
                        Projetos de pesquisa
                    </h6>
                </div>
                <div class="col-6 col-md-3">
                    <h1 class="card-numero-titulo">
                        <img src="<?= $uri . '/src/imgs/paper.svg' ?>" alt="">
                        +8
                    </h1>
                    <h6 class="card-numero-subtitulo">
                        Projetos de pesquisa
                    </h6>
                </div>
                <div class="col-6 col-md-3">
                    <h1 class="card-numero-titulo">
                        <img src="<?= $uri . '/src/imgs/earth.svg' ?>" alt="">
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
<div class="secao secao-noticias py-5">
    <div class="container">
        <div class="mb-5 d-flex align-items-center">
            <h1 class="secao-noticias-titulo">
                Fique por dentro das novidades
            </h1>
            <a href="/noticias" type="button" class="btn secao-btn ms-auto">
                Ver todas as notícias
            </a>
        </div>
        <?php
        // the query
        $the_query = new WP_Query(
            array(
                'post_type' => 'news',
                'posts_per_page' => 3,
            )
        );

        if ($the_query->have_posts()):
            $post = $the_query->posts[0];
            $id = $post->ID;
            ?>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-news card-news-main">
                        <a href="<?= get_permalink($id) ?>">
                            <img src="<?= get_the_post_thumbnail_url($id) ?>" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="d-flex mb-2">
                                    <span class="tag">
                                        Inovação
                                    </span>
                                    <span class="data ms-auto">
                                        11/10/2021
                                    </span>
                                </div>
                                <h3 class="card-title">
                                    <?= $post->post_title ?>
                                </h3>
                                <div class="card-text">
                                    <?= get_the_excerpt($id) ?>
                                </div>
                            </div>

                        </a>
                    </div>
                </div>
                <div class="col-md d-flex flex-column gap-4">
                    <? get_template_part(
                        'partials/card-news',
                        null,
                        array(
                            'post' => $the_query->posts[1],
                        )
                    );
                    get_template_part(
                        'partials/card-news',
                        null,
                        array(
                            'post' => $the_query->posts[2],
                        )
                    ); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<div class="secao secao-projetos py-5">
    <div class="container">
        <div class="secao-header">
            <div>
                <h1 class="secao-titulo">
                    Conheça nosso trabalho
                </h1>
                <div class="secao-subtitulo">
                    Inovações e Impactos que Fazem a Diferença na Sociedade
                </div>
            </div>
            <a href="/projetos" type="button" class="btn secao-btn ms-auto">
                Ver todos
            </a>
        </div>
        <?php
        // the query
        $projects_query = new WP_Query(
            array(
                'post_type' => 'projects',
                'posts_per_page' => -1,
            )
        );

        if ($projects_query->have_posts()):
            ?>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php
                    while ($projects_query->have_posts()):
                        $projects_query->the_post();
                        ?>
                        <div class="swiper-slide">
                            <?php
                            get_template_part('partials/card-project')
                                ?>
                        </div>
                        <?php
                    endwhile;
                    ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <?php
        endif;
        ?>
    </div>
</div>
<div class="secao secao-sobre py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="pics row">
                    <div class="col-md">
                        <img class="img-fluid" src="<?= $uri . '/src/imgs/about-0.jpeg' ?>" alt="">
                    </div>
                    <div class="col-md">
                        <img class="img-fluid" src="<?= $uri . '/src/imgs/about-1.jpeg' ?>" alt="">
                    </div>
                </div>
                <div class="citacao row mx-5">
                    <div class="col">
                        <div class="frase">
                            <div class="aspas">
                                “
                            </div>
                            <div>
                                Tecnologia e inovação movem o mundo. Nossa missão é estar sempre em movimento,
                                buscando o novo.
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex h-100">
                            <div class="autor mt-auto">
                                <div class="h-100">
                                    <span class="nome">
                                        Dr. João Paulo Queiroz
                                    </span>
                                    <br>
                                    <span class="autor">
                                        Coordenador do NAVI
                                    </span>
                                </div>
                                <div class="img-container">
                                    <img src="<?= get_template_directory_uri() . '/src/imgs/drjoao.png' ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <h1 class="secao-titulo">
                    Decole com o NAVI 🚀
                </h1>
                <p>
                    O laboratório traz como estratégia propulsora, inovação e ciência como ponte entre tecnologias,
                    engenharias e necessidades diárias.
                </p>
                <p>
                    Junto com parceiros da indústria, laboratórios de inovação nacionais e internacionais e agências
                    de
                    pesquisa governamentais, contando com toda a infraestrutura do IFRN, o NAVI oferece instalações,
                    equipamentos, pessoal especializado para dar suporte e inspirar a consolidação de parcerias e
                    colaboração.
                </p>
                <p>
                    <strong>
                        Confira nossos editais e venha fazer parte da nossa equipe!
                    </strong>
                </p>
                <a href="/editais" class="btn">
                    VER EDITAIS
                </a>
            </div>
        </div>
    </div>
</div>
<div class="secao secao-citacoes py-5">
    <div class="bg-el bg-el-3"></div>
    <div class="bg-el bg-el-4"></div>
    <div class="container">
        <div class="swiper citacoesSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="row mx-5 gap-5">
                        <div class="col-4">
                            <div class="d-flex">
                                <img class="ms-auto" src="<?= $uri . '/src/imgs/aspas.png' ?>" alt="">
                            </div>
                        </div>
                        <div class="col">
                            <h5>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen
                                book.”
                            </h5>
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
<div class="secao secao-parceiros py-5">
    <div class="container">
        <h1 class="secao-titulo">
            Nossos parceiros
        </h1>
        <div class="row">
            <div class="col">
                <img src="<?= get_template_directory_uri() . '/src/imgs/hib_logo.svg' ?>" alt="">
            </div>
            <div class="col">
                <img src="<?= get_template_directory_uri() . '/src/imgs/uma_logo.svg' ?>" alt="">
            </div>
            <div class="col">
                <img src="<?= get_template_directory_uri() . '/src/imgs/jhu_logo.svg' ?>" alt="">
            </div>
            <div class="col">
                <img src="<?= get_template_directory_uri() . '/src/imgs/mds_logo.svg' ?>" alt="">
            </div>
            <div class="col">
                <img src="<?= get_template_directory_uri() . '/src/imgs/lais_logo.svg' ?>" alt="">
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>