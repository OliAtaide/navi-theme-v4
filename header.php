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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body>
    <div class="navbar navbar-expand-lg fixed-top">
        <div class="container container-fluid">
            <a class="navbar-brand" href="<?php echo get_site_url() ?>">
                <img src="<?php echo get_template_directory_uri() . '/src/svg/logo.svg' ?>" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php wp_nav_menu(
                    array(
                        'header-menu' => 'header-menu',
                        'container' => 'ul',
                        'menu_class' => 'navbar-nav ms-auto',
                        'add_li_class' => 'nav-item',
                        'link_class' => 'nav-link',
                    )
                ); ?>
            </div>
        </div>
    </div>
    <?php get_template_part('partials/top-button'); ?>