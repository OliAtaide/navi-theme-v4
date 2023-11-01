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
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>"
                                target="_blank" class="btn">
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
                    <?= the_content(); ?>
                </div>
            </div>
            <div class="col">
                <div class="docs">
                    <h4>
                        Documentos publicados
                    </h4>
                    <?= the_field("docs"); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>