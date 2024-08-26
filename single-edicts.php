<?php
get_header();
$theme = get_bloginfo("template_url");
the_post();

global $wp;
$current_url = home_url($wp->request)
    ?>

<div class="secao-editais-single py-5">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">
                        Home
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/editais">
                        Editais
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?= the_title(); ?>
                </li>
            </ol>
        </nav>
        <h1 class="secao-titulo mb-4">
            Editais
        </h1>
        <div class="row">
            <div class="col mb-3">
                <div class="docs">
                    <h4>
                        Documentos publicados
                    </h4>
                    <?= the_field("docs"); ?>
                </div>
            </div>
            <div class="col-md-8">
                <div class="event">
                    <div class="section-title">
                        <h1>
                            <?= the_title(); ?>
                        </h1>
                    </div>
                    <div class="secao-post-info d-flex my-4 align-items-center">
                        <div>
                            <div class="d-flex gap-3">
                                <i class="fa-regular fa-user"></i>
                                <span>
                                    <?php the_author(); ?>
                                </span>
                            </div>
                            <br>
                            <div class="d-flex gap-3">
                                <i class="fa-regular fa-calendar"></i>
                                <span>Publicado em:
                                    <?= the_time("d/m/Y"); ?>
                                </span>
                            </div>
                        </div>
                        <?php get_template_part('/partials/social-icons') ?>
                    </div>
                    <hr>
                    <div class="event">
                        <?= the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>