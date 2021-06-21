<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kikanime.com</title>
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="assets/css/style/style.css">
    <!-- ÍCONE DA PAGINA (URL) -->
    <link rel="shortcut icon" type="image/jpg" href="assets/img/logo/logo-kik.png" />

</head>

<body>
    <!--NAV-->
    <?php include("header-indexView.php") ?>

    <div class="container">
        <div class="row" id="contato">
            <div class="col-12">
                <h4>CONTATO </h4>
                <h5> Preencha o formulário e deixe seus dados que entraremos em contato.</h5>
            </div>
            <!--COLUNA 1 - FORMULÁRIO-->
            <div class="col-lg-7">
                <form action="/contato" method="post" role="form" id="form_contato" name="form_contato">
                    <h5>FORMULÁRIO DE CONTATO </h5>
                    <div class="row form-group">
                        <div class="col-12">
                            <label for="id_nome">Nome</label>
                            <input required="" type="text" id="id_nome" name="nome" placeholder="Digite seu nome" value="" class="form-control ">
                        </div>
                        <div class="col-12">
                            <label for="id_telefone" class="mt-3">Telefone</label>
                            <input required="" type="text" id="id_telefone" name="telefone" placeholder="Telefone" value="" class="form-control ">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12">
                            <label for="id_email">Email</label>
                            <input required="" type="email" id="id_email" name="email" placeholder="Email" value="" class="form-control ">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="message">Mensagem</label>
                            <textarea required="" id="id_mensagem" name="mensagem" cols="30" rows="5" placeholder="Digite aqui sua mensagem ..." class="form-control "></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12 mt-4 text-center">
                            <button class="btn btn-enviar" id="btn_submit_form_contato" onclick="enviarEmail(); return false">ENVIAR</button>
                        </div>
                    </div>
                </form>
            </div>

            <!--COLUNA 2 - CONTATOS E MAPA-->
            <div class="col-lg-5" id="contato_informacoes">
                <h5> KIK ANIME </h5>
                <p> INFORMAÇÕES PARA ATENDIMENTO</p>
                <p> <i class="fas fa-mobile-alt"></i> +55 11 99683-0998 </p>
                <p> <i class="far fa-clock"></i> Segunda à Sexta-feira: 9:00 às 19:00</p>
                <p> <i class="far fa-clock"></i> Sábado: 9:00 às 12:00</p>
                <br>
                <p> REDES SOCIAIS </p>
                <a target="_blank" class="btn btn-redes-sociais" href="https://instagram.com/kik.mein?utm_medium=copy_link"> <i class="fab fa-instagram"></i> </a>
                <a target="_blank" class="btn btn-redes-sociais" href="https://www.facebook.com/henrique.viola.507"><i class="fab fa-facebook-square"></i> </a>
                <a target="_blank" class="btn btn-redes-sociais" href="https://wa.me/551199683-0998"> <i class="fab fa-whatsapp"></i> </a>
                <br>
                <img src="assets/img/fundo/fundo-cat.png" class="img-cat">

            </div>
        </div>
    </div>

    <?php include('footer-clienteView.php') ?>

    <script type="text/javascript" src="assets/js/script.js"></script>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>