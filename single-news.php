<?php
get_header();
the_post();

global $wp;
$current_url = home_url($wp->request);
$id = get_the_ID();
?>

<div class="toast-container position-fixed top-0 start-50 translate-middle-x p-3" data-bs-autohide="true"
    data-bs-delay="-100">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body">
            Link copiado para a área de transferência
        </div>
    </div>
</div>

<div class="secao-noticias-single">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">
                        Home
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/noticias">
                        Notícias
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
        <div class="autor">
            <div class="info">
                <strong>
                    <?= get_the_author() ?>
                </strong>
                <br>
                <span>
                    <? the_date() ?> - Atualizado em
                    <?= the_modified_date() ?>
                </span>
            </div>
            <div class="share">
                <span>
                    Compartilhe:
                </span>
                <div class="dropdown-center">
                    <button class="btn shar-btn" type="button" data-bs-toggle="dropdown">
                        <i class="bi bi-share"></i>
                    </button>
                    <div class="dropdown-menu">
                        <div class="dropdown-menu-arrow"></div>
                        <?php
                        get_template_part('/partials/share-icons')
                            ?>
                    </div>
                </div>
                <button type="button" class="btn link-btn" data-link="<?php the_permalink(); ?>"
                    title="Botão de Copiar Link">
                    <i class="bi bi-link-45deg"></i>
                </button>
            </div>
        </div>
        <img src="<?= the_post_thumbnail_url() ?>" alt="<?= the_post_thumbnail_caption() ?>" class="thumbnail">
        <?= the_content() ?>
        <hr>
        <div class="autor">
            <div class="topics">
                <strong>
                    <i class="bi bi-tag"></i>
                    Tópicos
                </strong>
                <br>
                <span>
                    <?= the_tags(); ?>
                </span>
            </div>
            <div class="share">
                <span>
                    Compartilhe:
                </span>
                <div class="dropdown-center">
                    <button class="btn shar-btn" type="button" data-bs-toggle="dropdown">
                        <i class="bi bi-share"></i>
                    </button>
                    <div class="dropdown-menu">
                        <div class="dropdown-menu-arrow"></div>
                        <?php
                        get_template_part('/partials/share-icons')
                            ?>
                    </div>
                </div>
                <button type="button" class="btn link-btn" data-link="<?php the_permalink(); ?>"
                    title="Botão de Copiar Link">
                    <i class="bi bi-link-45deg"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<?php
$rel_query = new WP_Query(
    array(
        'post_type' => 'news',
        'category__in' => wp_get_post_categories($id),
        'posts_per_page' => 3,
        'post__not_in' => array($id)
    )
);
?>

<div class="secao-noticias py-5">
    <div class="container">
        <h1 class="secao-title mb-5">
            Notícias relacionadas
        </h1>
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