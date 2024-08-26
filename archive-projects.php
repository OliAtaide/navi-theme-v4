<!--cabecalho-->
<?php
get_header();
$theme = get_bloginfo("template_url");
?>
<main>
  <div class="d-none">
    <?php

    $qsearch = $_GET['s'];

    $qcats = $_GET['categories']

      ?>
  </div>
  <?php
  $wp_query = new WP_Query(
    array(
      'post_type' => 'projects',
      'posts_per_page' => 6,
      's' => $qsearch,
      'category__in' => $qcats
    )
  );
  ?>
  <section class="secao-projetos-archive py-5">
    <div class="container">
      <ul class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">
          Projetos
        </li>
      </ul>
      <form class="search-form" role="search" method="get" id="searchform">
        <h1 class="secao-titulo">
          Conheça nossos projetos!
          <?php if (is_search()): ?>
            - Listando por “<?php echo get_search_query(); ?>”
          <?php endif ?>
        </h1>
        <div class="d-flex my-5 search-field">
          <div class="cats">
            <?php
            $categories = get_categories();
            ?>
            <?php foreach ($categories as $category): ?>
              <div>
                <input type="checkbox" class="btn-check" id="<?= $category->cat_ID; ?>" name="categories[]"
                  value="<?= $category->cat_ID; ?>">
                <label class="btn cat btn-outline-navi-second" for="<?= $category->cat_ID; ?>"
                  data-url="<?php echo admin_url("admin-ajax.php") ?>" data-type="projects" data-posts="6"
                  data-category="<?= $category->cat_ID; ?>">
                  <?= $category->cat_name; ?>
                </label>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="input-group ms-auto">
            <input class="form-control" type="search" placeholder="Pesquise aqui..." aria-label="Search"
              aria-describedby="button-addon2" name="s">
            <button class="btn btn-outline-success" type="submit">
              <i class="bi bi-search"></i>
            </button>
          </div>
        </div>
      </form>

      <div class="row row-gap-4">
        <?php if ($wp_query->have_posts()): ?>
          <?php
          while ($wp_query->have_posts()):
            $wp_query->the_post();
            ?>
            <div class="col-md-4">
              <?php
              get_template_part('partials/card-project')
                ?>
            </div>
            <?php
          endwhile;
        else:
          if (is_search()):
            echo 'Sem resultados para "' . get_search_query() . '"';
          endif;
        endif;
        ?>
      </div>
      <?= the_posts_pagination(); ?>
  </section>
</main>
<script>

</script>
<!--rodape-->
<?php
get_footer();
?>