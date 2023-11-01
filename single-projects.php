<?php
get_header();
$theme = get_bloginfo("template_url");
the_post();

global $wp;
$current_url = home_url($wp->request)
    ?>

<div class="section event-section">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="event">
                    <div class="section-title">
                        <h1>
                            <?= the_title(); ?>
                        </h1>
                    </div>
                    <div class="d-flex my-4 align-items-center">
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
                        <div class="logos ms-auto">
                            <a type="button" class="btn">
                                <i class="fa-brands fa-square-instagram"></i>
                            </a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank"
                                class="btn">
                                <i class="fa-brands fa-square-facebook"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink() ?>"
                                target="_blank" class="btn" data-show-count="false">
                                <i class="fa-brands fa-square-twitter"></i>
                            </a>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col">

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="event">
                    <img src="<?= the_post_thumbnail_url(); ?>" alt="" class="event-thumbnail">
                    <?= the_content(); ?>
                </div>
            </div>
            <div class="col">
                <h3 class="mb-4">Confira também</h3>
                <?php
                $post_id = get_the_ID();
                $categories = wp_get_post_categories($post_id);

                foreach ($categories as $key => $value) {
                    echo '<script>console.log(' . $value . ')</script';
                }

                $related = new WP_Query(
                    array(
                        'post_type' => 'projects',
                        'posts_per_page' => 2,
                        'post__not_in' => array($post_id)
                    )
                );


                if ($related->have_posts()) {
                    while ($related->have_posts()) {
                        $related->the_post();
                        ?>
                        <a href="<?= get_permalink(get_the_ID()) ?>">
                            <div class="card card-news card-news-main mb-5">
                                <img src="<?= the_post_thumbnail_url(); ?>" alt="" class="card-img-top">
                                <div class="card-body">
                                    <div class="d-flex mb-3">
                                        <span class="card-tag">
                                            Inovação
                                        </span>
                                        <span class="ms-auto">
                                            11/10/2021
                                        </span>
                                    </div>
                                    <h4 class="card-title">
                                        <?= the_title() ?>
                                    </h4>
                                    <div class="card-text">
                                        <?= the_excerpt() ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php
                    }
                    wp_reset_postdata();
                }
                ?>

            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>