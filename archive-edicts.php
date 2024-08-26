<?php get_header() ?>

<div class="d-none">
  <?php

  $qsearch = $_GET['s'];

  $qstatus = $_GET['status'];

  ?>
</div>
<?php
$new_query = new WP_Query(
  array(
    'post_type' => 'edicts',
    'posts_per_page' => -1,
    's' => $qsearch,
    'meta_key' => 'status',
    'meta_value' => $qstatus
  )
);

?>
<div class="secao-editais py-5">
  <div class="container">
    <ul class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/">Home</a>
      </li>
      <li class="breadcrumb-item active">
        Editais
      </li>
    </ul>
    <h1 class="secao-titulo">
      Editais
    </h1>
    <div class="row mt-5">
      <div class="col-md-4">
        <form role="search" method="get">
          <div class="input-group w-100">
            <input type="text" class="form-control" placeholder="Pesquise aqui..." aria-label="Pesquise aqui..."
              aria-describedby="basic-addon2" name="s">
            <button type="submit" class="input-group-text" id="basic-addon2">
              <i class="bi bi-search"></i>
            </button>
          </div>
        </form>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link <?= !$qstatus ? 'active' : '' ?>" type="button" href="<?= '/editais/?s=' . $qsearch ?>">
              Todos
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link <?= $qstatus == 'andamento' ? 'active' : '' ?>"
              href="<?= '/editais/?status=andamento&s=' . $qsearch ?>">
              Em andamento
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link <?= $qstatus == 'finalizado' ? 'active' : '' ?>"
              href="<?= '/editais/?status=finalizado&s=' . $qsearch ?>">
              Finalizados
            </a>
          </li>
        </ul>
      </div>
      <div class="col">
        <?php
        if ($new_query->have_posts()):
          while ($new_query->have_posts()):
            $new_query->the_post();
            ?>
            <a href="<?= the_permalink(); ?>">
              <div class="card card-edital">
                <div class="card-body">
                  <h3 class="card-title">
                    <?= the_title(); ?>
                  </h3>
                  <div class="card-text">
                    <p>
                      <?= the_excerpt(); ?>
                    </p>
                    <div class="row">
                      <div class="col-4">
                        <span>
                          Status
                        </span>
                        <br>
                        <strong>
                          <?= the_field('status') ?>
                        </strong>
                      </div>
                      <div class="col-4">
                        <span>
                          Última atualização
                        </span>
                        <br>
                        <strong>
                          <?= the_modified_date() ?>
                        </strong>
                      </div>
                      <div class="col-4">
                        <span>
                          Etapa
                        </span>
                        <br>
                        <strong>
                          <?= the_field('etapa') ?>
                        </strong>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            <hr>
            <?php
          endwhile;
        elseif (is_search()):
          echo 'Sem resultados para "' . get_search_query() . '"';
        endif;
        ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer() ?>