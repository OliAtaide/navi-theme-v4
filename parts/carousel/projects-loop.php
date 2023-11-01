<?php $theme = get_bloginfo("template_url"); ?>
<div class="swiper-slide">
    <a href="<?= the_permalink(); ?>" class="decoration-none">
    <div class="rounded shadow project">
        <div class="img-project-box">
            <?php
            $img = get_the_post_thumbnail_url();
            if ($img == '') {
                $img = "$theme/dist/img/default.png";
            }
            ?>
           
                <img src="<?php echo $img; ?>" alt="<?php the_title(); ?>" class="img-fluid w-100">
            
        </div>
        <div class="p-4">
            <h3 class="font-weight-bold text-navi-black-first">
                <?php the_title(); ?>
            </h3>
            <div class="m-0 mt-3 text-navi-black-third">
                <?php the_excerpt(); ?>
            </div>
        </div>
    </div>
    </a>
</div>