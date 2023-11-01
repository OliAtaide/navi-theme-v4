<?php /* Template Name: Contato */?>

<?php get_header() ?>

<div class="section contact-section">
    <div class="container">
        <h1 class="section-title">
            Contato
        </h1>
        <div class="row">
            <div class="col">
                <div class="section-tip">
                    Dúvidas? Entre em contato conosco!
                </div>
                <div class="section-contacts">
                    <div class="section-contact">
                        <i class="bi bi-telephone"></i>
                        <div>
                            <h6>
                                Contato
                            </h6>
                            <span>
                                +55 84 0000-0000
                            </span>
                        </div>
                    </div>
                    <div class="section-contact">
                        <i class="bi bi-envelope"></i>
                        <div>
                            <h6>
                                E-mail
                            </h6>
                            <span>
                                email@gmail.com
                            </span>
                        </div>
                    </div>
                    <div class="section-contact">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <h6>
                                Endereço
                            </h6>
                            <span>
                                Avenida Senador Salgado Filho, 1559,
                                <br>
                                Tirol. Natal - RN.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="" class="form">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nome:</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Seu nome">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">E-mail:</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Seu e-mail">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Mensagem:</label>
                                <textarea type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Sua mensagem"></textarea>
                            </div>
                            <div class="d-flex">
                                <button type="submit" class="btn btn-primary ms-auto">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>