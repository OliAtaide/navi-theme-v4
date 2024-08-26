<?php $theme = get_bloginfo("template_url"); ?>
<a href="<?= the_permalink(); ?>">

  <div class="card card-news card-news-row p-0 flex-row" data-events="<?= the_ID(); ?>">
    <?php
    $img = get_the_post_thumbnail_url();
    if ($img == '') {
      $img = "$theme/dist/img/default.png";
    }
    ?>
    <div class="img-wrapper rounded-start">
      <img src="<?= $img; ?>" class="" alt="<?php the_title(); ?>">
    </div>
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
          Data do evento
        </h6>
        <p>
          <?= the_field("data"); ?>
        </p>
        <h6>
          Local do evento
        </h6>
        <p>
          <?= the_field("local"); ?>
        </p>
      </div>
    </div>
  </div>
</a>