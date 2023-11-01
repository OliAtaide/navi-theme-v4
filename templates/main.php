<?php /* Template Name: Pagina Principal */?>

<?php get_header() ?>

<div class="section header-section">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <span class="section-tag">
                    Núcleo Avançado de Inovação Tecnológica
                </span>
                <h1 class="section-title">
                    Desenvolvendo
                    <br>
                    <span class="enfasis">Inovação e Tecnologia</span>
                </h1>
                <h3 class="section-text">
                    Apaixonados por transformar nossa pesquisa em <span class="underlined">resultados para a
                        sociedade</span>.
                </h3>
                <div class="btn btn-ok">
                    VER PROJETOS
                </div>
                <div class="logos">
                    <a type="button" class="btn">
                        <i class="fa-brands fa-square-instagram"></i>
                    </a>
                    <a type="button" class="btn">
                        <i class="fa-brands fa-square-facebook"></i>
                    </a>
                    <a type="button" class="btn">
                        <i class="fa-brands fa-square-twitter"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm">
                <img class="img-fluid w-100"
                    src="<?php echo get_template_directory_uri() . '/src/svg/header_img.svg' ?>" alt="">
            </div>
        </div>
    </div>
</div>
<div class="data-section">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="d-flex gap-3 flex-column flex-sm-row">
                    <img src="<?php echo get_template_directory_uri() . '/src/svg/proj_pesquisa.svg' ?>" alt="">
                    <div>
                        <h1>+8</h1>
                        Projetos de pesquisa
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="d-flex gap-3 flex-column flex-sm-row">
                    <img src="<?php echo get_template_directory_uri() . '/src/svg/reg_software.svg' ?>" alt="">
                    <div>
                        <h1>+20</h1>
                        Registros de software
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="d-flex gap-3 flex-column flex-sm-row">
                    <img src="<?php echo get_template_directory_uri() . '/src/svg/patentes.svg' ?>" alt="">
                    <div>
                        <h1>+8</h1>
                        Patentes
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="d-flex gap-3 flex-column flex-sm-row">
                    <img src="<?php echo get_template_directory_uri() . '/src/svg/parcerias_inter.svg' ?>" alt="">
                    <div>
                        <h1>+9</h1>
                        Parcerias Internacionais
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section news-section">
    <div class="container">
        <span class="section-tag w-auto">
            <small>
                Notícias
            </small>
        </span>

        <div class="section-title d-flex">
            <h1>
                Fique por dentro das novidades!
            </h1>
            <div class="btn ms-auto btn-all">
                Ver todas as notícias
            </div>
        </div>
        <?php
        // the query
        $the_query = new WP_Query(
            array(
                'post_type' => 'news',
                'posts_per_page' => 3,
            )
        );
        ?>

        <?php if ($the_query->have_posts()): ?>


            <div class="row ">
                <div class="col-5">
                    <div class="card card-news card-news-main">
                        <?php
                        $link1 = get_permalink($the_query->posts[0]->ID);
                        ?>
                        <a href="<?php echo $link1 ?>">
                            <img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id($the_query->posts[0]->ID)) ?>"
                                alt="" class="card-img-top">
                        </a>
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <span class="card-tag">
                                    Inovação
                                </span>
                                <span class="ms-auto">
                                    11/10/2021
                                </span>
                            </div>
                            <a href="<?php echo $link1 ?>">
                                <h4 class="card-title">
                                    <?php echo $the_query->posts[0]->post_title ?>
                                </h4>
                            </a>
                            <div class="card-text">
                                <?php echo $the_query->posts[0]->post_content ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <div class="row mb-3 h-50">
                        <div class="card card-news card-news-row p-0 flex-row">
                            <?php
                            $link2 = get_permalink($the_query->posts[1]->ID);
                            ?>
                            <a href="<?php echo $link2 ?>">
                                <img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id($the_query->posts[1]->ID)) ?>"
                                    class="rounded-start" alt="...">
                            </a>
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <span class="card-tag">
                                        Inovação
                                    </span>
                                    <span class="ms-auto">
                                        11/10/2021
                                    </span>
                                </div>
                                <a href="<?php echo $link2 ?>">
                                    <h4 class="card-title">
                                        <?php echo $the_query->posts[1]->post_title ?>
                                    </h4>
                                </a>
                                <div class="card-text">
                                    <?php echo $the_query->posts[1]->post_content ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 h-50">
                        <div class="card card-news card-news-row p-0 flex-row">
                        <?php
                            $link2 = get_permalink($the_query->posts[2]->ID);
                            ?>
                            <a href="<?php echo $link2 ?>">
                                <img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id($the_query->posts[2]->ID)) ?>"
                                    class="rounded-start" alt="...">
                            </a>
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <span class="card-tag">
                                        Inovação
                                    </span>
                                    <span class="ms-auto">
                                        11/10/2021
                                    </span>
                                </div>
                                <a href="<?php echo $link2 ?>">
                                    <h4 class="card-title">
                                        <?php echo $the_query->posts[2]->post_title ?>
                                    </h4>
                                </a>
                                <div class="card-text">
                                    <?php echo $the_query->posts[2]->post_content ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <p>
            <?php __('No News'); ?>
        </p>
    <?php endif; ?>
</div>
</div>
<div class="section projects-section">
    <div class="container">
        <?php
        // the query
        $projects_query = new WP_Query(
            array(
                'post_type' => 'projects',
                'posts_per_page' => 3,
            )
        );


        ?>

        <span class="section-tag">
            Projetos
        </span>
        <div class="section-title d-flex">
            <h1>
                Conheça nosso trabalho
            </h1>
            <div class="btn ms-auto btn-all">
                Ver todos os projetos
            </div>
        </div>
        <div class="projects">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php foreach ($projects_query->posts as $key => $value): ?>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id($value->ID)) ?>"
                                    alt="" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">
                                        <?php echo $value->post_title ?>
                                    </h3>
                                    <span class="card-text">
                                        <?php echo $value->post_content ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
<div class="section notices-section">
    <div class="container">
        <div class="row">
            <div class="col">
                <img class="img-equipe" src="<?php echo get_template_directory_uri() . '/src/imgs/equipe.png' ?>"
                    alt="">
            </div>
            <div class="col">
                <span class="section-tag w-auto">
                    <small>
                        Editais
                    </small>
                </span>

                <div class="section-title d-flex">
                    <h1>
                        Decole com o NAVI
                    </h1>
                </div>
                <div class="section-text">
                    <p>
                        O laboratório traz como estratégia propulsora, inovação e ciência como ponte entre
                        tecnologias, engenharias e necessidades diárias.
                    </p>
                    <p>
                        Junto com parceiros da indústria, laboratórios de inovação nacionais e internacionais e
                        agências de pesquisa governamentais, contando com toda a infraestrutura do IFRN, o NAVI
                        oferece instalações, equipamentos, pessoal especializado para dar suporte e inspirar a
                        consolidação de parcerias e colaboração
                    </p>
                    <p>
                        <a href="">
                            Confira nossos editais e venha fazer parte da nossa equipe!
                        </a>
                    </p>
                    <button type="button" class="btn btn-all">
                        Ver todos os editais
                    </button>
                    <div class="d-flex quote w-75">
                        <h1 class="quote-mark">“</h1>
                        <span>
                            Tecnologia e inovação movem o mundo. Nossa missão é estar sempre em movimento, buscando
                            o novo.
                        </span>
                    </div>
                    <div class="quoter d-flex align-items-center">
                        <div class="ms-auto">
                            <h6 class="quoter-name">
                                Dr. João Paulo Queiroz
                            </h6>
                            <h6 class="quoter-post">
                                Coordenador do NAVI
                            </h6>
                        </div>
                        <img src="<?php echo get_template_directory_uri() . '/src/imgs/drjoao.png' ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section partners-section">
    <div class="container">
        <span class="section-tag w-auto">
            <small>
                Parceiros
            </small>
        </span>

        <div class="section-title">
            <h1 class="text-center">
                Nossos parceiros
            </h1>
        </div>
        <hr>
        <div class="d-flex align-items-center justify-content-between">
            <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/src/imgs/hogskolan.png' ?>" alt="">
            <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/src/imgs/massachusetts.png' ?>"
                alt="">
            <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/src/imgs/johns_hopkins.png' ?>"
                alt="">
            <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/src/imgs/mds.png' ?>" alt="">
            <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/src/imgs/lais.png' ?>" alt="">
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 56,
        centeredSlides: false,
        slidesPerGroup: 3,
        grabCursor: true,
        keyboard: {
            enabled: true,
        },
        breakpoints: {
            769: {
                slidesPerView: 3,
                slidesPerGroup: 3,
            },
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>

<?php get_footer() ?>