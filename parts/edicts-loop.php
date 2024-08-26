<?php $theme = get_bloginfo("template_url"); ?>
<a href="<?= the_permalink(); ?>" class="">

    <div class="card card-news card-news-row p-0 h-100 flex-row" data-events="<?= the_ID(); ?>">
        <div class="card-body">
            <h4 class="card-title">
                <?php the_title(); ?>
            </h4>
            <div class="card-text">
                <?= get_the_excerpt(); ?>
            </div>
        </div>
        <div class="vr"></div>
        <div class="card-body w-25 d-flex">
            <div class="m-auto">
                <h6>
                    Última atuailização
                </h6>
                <p>
                    <?= the_modified_date(); ?>
                </p>
                <h6>
                    Status
                </h6>
                <p>
                    <?= the_field("status"); ?>
                </p>
                <h6>
                    Etapa
                </h6>
                <p>
                    <?= the_field("etapa"); ?>
                </p>
            </div>
        </div>
    </div>
</a>