<?php $theme = get_bloginfo("template_url"); ?>
<div class="swiper-slide">
    <div class="container">
        <div class="row justify-content-center flex-column flex-lg-row">
            <div class="col-12 col-lg-2 d-flex align-items-start justify-content-start justify-content-lg-center">
                <img src="<?php echo $theme; ?>/dist/icons/quote.png" alt="Citação" class="img-fluid mb-4 mb-lg-0" />
            </div>
            <div class="col-12 col-lg-5">
                <div>
                    <div class="font-18 text-navi-black-sixth mb-0 mb-lg-navi-32">
                        <?php the_content(); ?>
                    </div>
                    <div class="info d-flex flex-column text-right text-lg-left">
                        <span class="author text-navi-second font-weight-bold"><?php the_title(); ?></span>
                        <span class="function font-weight-light"><span><?php the_field('cargo'); ?></span> | <span><?php the_field('instituto'); ?></span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>