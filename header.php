<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <title>
        <?php bloginfo('name'); ?> &raquo;
        <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
    </title>
    <link rel="icon" type="image/x-icon"
        href="<?php echo get_template_directory_uri() . '/src/imgs/favicon-white.png' ?>">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/src/fontawesome/css/fontawesome.css' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/src/fontawesome/css/brands.css' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/src/fontawesome/css/regular.css' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/src/fontawesome/css/solid.css' ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo get_site_url() ?>">
                <img src="<?php echo get_template_directory_uri() . '/src/imgs/logo-white.png' ?>" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php wp_nav_menu(
                    array(
                        'header-menu' => 'header-menu',
                        'container' => 'ul',
                        'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0 gap-5',
                    )
                ); ?>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-5 d-none">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Notícias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projetos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Editais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>