<?php $theme = get_bloginfo("template_url"); ?>

<div class="col-md-4" data-news="<?= the_ID(); ?>">
  <div class="card card-news card-news-main">

    <a href="<?= the_permalink(); ?>">

      <?php
      $img = get_the_post_thumbnail_url();
      if ($img == '') {
        $img = "$theme/dist/img/default.png";
      }
      ?>
      <img src="<?php echo $img; ?>" class="card-img-top" alt="...">

      <div class="card-body">
        <div class="d-flex mb-3">
          <span class="card-tag">
            Inovação
          </span>
          <span class="card-date ms-auto">
            11/10/2021
          </span>
        </div>
        <h4 class="card-title">
          <?= the_title(); ?>
        </h4>
        <div class="card-text">
          <?= get_the_excerpt(); ?>
        </div>
      </div>
    </a>
  </div>

</div>