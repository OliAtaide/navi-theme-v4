<!--cabecalho-->
<?php
get_header();
$theme = get_bloginfo("template_url");
?>
<div class="secao-noticias-archive py-5">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Notícias</li>
      </ol>
    </nav>
    <h1 class="secao-titulo">
      Notícias
      <?php if (is_search()): ?>
        - Listando por “<?php echo get_search_query(); ?>”
      <?php endif ?>
    </h1>
    <form role="search" method="get">
      <div class="mais-buscados">
        <span>
          <i class="bi bi-tag"></i>
          Assuntos mais buscados:
        </span>
        <div class="btn btn-tag">
          NAVI
        </div>
        <div class="input-group ms-auto">
          <input name="s" type="text" class="form-control" placeholder="Pesquise aqui..."
            aria-label="Recipient's username" aria-describedby="basic-addon2">
          <button type="submit" class="input-group-text" id="basic-addon2">
            <i class="bi bi-search"></i>
          </button>
        </div>
      </div>
    </form>
    <div class="row">
      <div class="col-md-7">
        <div class="news-container">
          <?php
          load_news(3);
          ?>
        </div>
      </div>
      <div class="col">
        <?php get_template_part('partials/card-news-popular') ?>
      </div>
    </div>
  </div>
</div>
<!--rodape-->
<?php
get_footer();
?>