<?php /* Template Name: Contato */ ?>

<?php get_header() ?>

<div class="secao-contato py-5">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contato</li>
            </ol>
        </nav>
        <h1 class="secao-titulo">
            Contato
        </h1>
        <p>
            Estamos aqui para ouvir você! Entre em contato conosco para dúvidas, sugestões ou qualquer outra
            questão.
        </p>
        <form id="contactForm" method="POST">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $name = $_POST['contact_name'];
                $email = $_POST['contact_email'];
                $message = $_POST['contact_message'];

                $to = 'filipe.ataide@lais.huol.ufrn.br';
                $subject = $name;

                $headers = array(
                    'Content-type: text/plain; charset=utf-8',
                    'From: Núcleo Avançado de Inovação Tecnológica (NAVI) <naoresponder@navi.ifrn.edu.br>',
                    'Reply-To: ' . $email
                );

                $sent = wp_mail($to, $subject, strip_tags($message), $headers);

                if ($sent) {
                    echo "Seu contato foi enviado com sucesso.";
                } else {
                    echo "Erro.";
                }
            }
            ?>
            <div class="mb-3">
                <label for="input1" class="form-label">
                    Nome
                </label>
                <input required type="text" class="form-control" name="contact_name" id="input-name"
                    placeholder="Seu nome">
            </div>
            <div class="mb-3">
                <label for="input2" class="form-label">
                    E-mail
                </label>
                <input required type="email" class="form-control" name="contact_email" id="input-email"
                    placeholder="Seu e-mail">
            </div>
            <div class="mb-3">
                <label for="input3" class="form-label">
                    Mensagem
                </label>
                <textarea required type="text" class="form-control" name="contact_message" id="input-message" value=""
                    placeholder="Sua mensagem"></textarea>
            </div>

            <div class="d-flex w-100">
                <button type="submit" class="btn btn-primary ms-auto">
                    Enviar
                </button>
            </div>
        </form>
        <div class="mapa">
            <div class="info">
                <h1>
                    Nossa sede fica em Natal, Rio Grande do Norte - Brasil
                </h1>
                <div class="lista">
                    <div class="d-flex align-items-center gap-4">
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
                    <div class="d-flex align-items-center gap-4">
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
                    <div class="d-flex align-items-center gap-4">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <h6>
                                Endereço
                            </h6>
                            <span>
                                Avenida Senador Salgado Filho, 1559,
                                Tirol. Natal - RN.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15877.24667939642!2d-35.2023574!3d-5.8115854!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b2ffd66e5c074d%3A0xc18cff4b0afc9f9f!2zTklUL0NOQVQvSUZSTiAtIE7DumNsZW8gQXZhbsOnYWRvIGRlIElub3Zhw6fDo28gVGVjbm9sw7NnaWNh!5e0!3m2!1spt-BR!2sbr!4v1722270096609!5m2!1spt-BR!2sbr"
                width="700" height="650" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

<?php get_footer() ?>