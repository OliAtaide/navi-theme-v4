<?php
$post = $args['post'];
$id = $post->ID;
?>
<div class="card card-news" style="max-width: 540px;">
    <a href="<?= the_permalink() ?>" class="h-100">
        <div class="row g-0 h-100">
            <div class="col-md-4">
                <img src="<?= the_post_thumbnail_url(); ?>" class="img-fluid rounded-start h-100" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="d-flex mb-2">
                        <div class="tag">
                            <?php
                            foreach (get_categories($id) as $category) {
                                echo $category->name;
                                echo ", ";
                            } ?>
                        </div>
                        <span class="data ms-auto">
                            <?= the_date(); ?>
                        </span>
                    </div>
                    <h5 class="card-title">
                        <?= the_title(); ?>
                    </h5>
                    <div class="card-text">
                        <?= the_excerpt(); ?>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>