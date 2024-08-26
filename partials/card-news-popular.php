<?php
$views_query = new WP_Query(
    array(
        'post_type' => 'news',
        'posts_per_page' => 4,
        'meta_key' => 'post_views_count',
        'orderby' => 'meta_value_num',
        'order' => 'DESC'
    )
);
?>

<div class="card card-news-popular">
    <div class="card-body">
        <h3 class="card-title">
            Mais lidas
        </h3>
        <hr>
        <?php
        if ($views_query->have_posts()):
            while ($views_query->have_posts()):
                $views_query->the_post();
                ?>
                <div class="snippet-news">
                    <h6 class="card-title">
                        <?= the_title() ?>
                    </h6>
                    <img src="<?= the_post_thumbnail_url(  ) ?>" alt="">
                </div>
                <hr>
                <?php
            endwhile;
        endif;
        ?>
        <div class="btn border-primary">
            Mais conteúdos recomendados
        </div>
    </div>
</div>