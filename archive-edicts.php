<!--cabecalho-->
<?php
get_header();
$theme = get_bloginfo("template_url");
?>
<!--conteudo disposto em caso de pesquisa-->

<main>
  <?php if (is_search()): ?>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item"><a href="/noticias">Notícias</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)"></a></li>
    </ol>
    <section class="edicts">
      <div class="container py-navi-64">
        <div class="row">
          <div class="col-12">
            <div class="mb-5">
              <h2 class=" font-40 font-weight-black text-navi-seventh">
                Fique por dentro das novidades!
              </h2>
              <div class="d-flex flex-column">
                <span class="font-24">Buscando por: "
                  <?php echo get_search_query(); ?>"
                </span>
                <span class="col-1">
                  <a class="decoration-none text-navi-second mt-2"
                    href="javascript:void(window.location.replace(window.location.pathname))">Voltar</a>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 d-flex flex-column justify-content-center">
            <div>
              <form role="search" method="get" id="searchform">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Pesquise aqui..." aria-label="Pesquise aqui..."
                    aria-describedby="button-addon2" name="s" value="<?php echo $_GET["s"] ?>" />
                  <button class="btn btn-navi-second" type="submit"><i class="icon-search d-flex"></i></button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <?php if (search_result_has_occurency("edicts", $_GET['s'])): ?>
          <div class="row row-cols-lg-3 edicts-cards">
            <?php display_post_type_on_search("edicts", $_GET['s'], 6); ?>
          </div>
          <div class="w-100 d-flex justify-content-center">
            <button id="cM" class="text-center btn btn-navi-second shadow px-navi-32 py-2" data-page="2"
              data-url="<?php echo admin_url("admin-ajax.php") ?>" data-type="edicts" data-append=".edictscards"
              data-posts="6" data-name="notícias" data-search="true" data-category="">
              Carregar mais
            </button>
          </div>
        <?php else: ?>
          <div>
            <p class="text-navi-second">
              Não resultados para esta pesquisa.
            </p>
          </div>
        <?php endif; ?>


      </div>
      </div>
    </section>
    <!--conteudo principal disposto sem pesquisa-->
  <?php elseif (is_archive()): ?>

    <section class="news archive-news">
      <div class="container">
        <ul class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/">Home</a>
          </li>
          <li class="breadcrumb-item active">
            <a href="javascript:void(0)" disabled>Notícias</a>
          </li>
        </ul>
        <form class="search-form" role="search" method="get" id="searchform">
          <h2 class="mb-5 font-40 font-weight-black text-navi-seventh">
            Fique por dentro das novidades!
          </h2>
          <div class="d-flex my-5">
            <div class="cats">
              <?php
              $categories = get_categories();
              ?>
              <?php foreach ($categories as $category): ?>
                <div>
                  <input type="checkbox" class="btn-check" id="<?= $category->cat_ID; ?>" name="categories[]"
                    value="<?= $category->cat_ID; ?>">
                  <label class="btn cat btn-outline-navi-second" for="<?= $category->cat_ID; ?>"
                    data-url="<?php echo admin_url("admin-ajax.php") ?>" data-type="edicts" data-posts="6"
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
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </div>
          </div>
        </form>

        <?php if (post_type_has_occurency("edicts")): ?>
          <div class="row mb-3 h-50">
            <?php display_post_type_on_windows_reload("edicts", 6); ?>
          </div>
          <?= the_posts_pagination(); ?>
        <?php else: ?>
          <div>
            <p class="text-navi-second">
              Não há projetos disponíveis no momento.
            </p>
          </div>
        <?php endif; ?>

      </div>
    </section>
  <?php endif; ?>
</main>
<!--rodape-->
<?php
get_footer();
?>