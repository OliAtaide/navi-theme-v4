<div class="card card-projeto">
    <img src="<?= the_post_thumbnail_url() ?>" alt="" class="card-img-top">
    <div class="card-body">
        <h6 class="card-title">
            <?= the_title(); ?>
        </h6>
        <div class="card-text">
            <?= the_excerpt(); ?>
        </div>
        <div class="d-flex mt-auto">
            <a href="<?= the_permalink(); ?>" class="btn ms-auto">
                <i class="bi bi-eye-fill"></i>
                Ver mais
            </a>
        </div>
    </div>
</div>