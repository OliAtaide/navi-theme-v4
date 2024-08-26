<?php
get_header();
the_post();

?>

<div class="secao-projetos-single">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">
                        Home
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/projetos">
                        Projetos
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?= the_title(); ?>
                </li>
            </ol>
        </nav>
        <h1 class="secao-titulo">
            <?= the_title(); ?>
        </h1>
        <img src="<?= the_post_thumbnail_url() ?>" alt="<?= the_post_thumbnail_caption() ?>" class="thumbnail">
        <div class="autor">
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
        <?= the_content() ?>
        <? get_template_part('partials/share-icons') ?>

        <h1 class="secao-titulo mt-5">
            Outros projetos
        </h1>
    </div>
</div>
<?php
$rel_query = new WP_Query(
    array(
        'post_type' => 'projects',
        'category__in' => wp_get_post_categories($id),
        'posts_per_page' => 2,
        'post__not_in' => array($id)
    )
);
?>

<div class="secao-noticias py-5">
    <div class="container">
        <div class="d-flex flex-column gap-4">
            <?php
            if ($rel_query->have_posts()):
                while ($rel_query->have_posts()):
                    $rel_query->the_post();
                    get_template_part(
                        'partials/card-news',
                        null,
                        array(
                            'post' => $rel_query->post,
                        )
                    );
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>