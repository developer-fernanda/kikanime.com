<?php

include('conexao.php');
include('logica-cadastroCliente.php');

?>


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

    <div class="container" id="background-cadastro-cliente">

        <form name="formcadastroCliente" method="post">
            <div class="form-row">
                <div class="offset-lg-3 col-lg-6" id="form-cadastro-cliente">
                    <h6> CADASTRO DE CLIENTE </h6>
                    <div class="form-group">
                        <label for="txtnome_cliente"> Nome </label>
                        <input type="text" class="form-control" name="txtnome_cliente" placeholder="Digite seu nome">
                    </div>
                    <div class="form-group">
                        <label for="txtemail_cliente"> E-mail </label>
                        <input type="text" class="form-control" name="txtemail_cliente" placeholder="Digite seu e-mail">
                    </div>
                    <div class="form-group">
                        <label for="txtsenha_cliente"> Senha </label>
                        <input type="password" class="form-control" name="txtsenha_cliente" placeholder="Sua senha">
                    </div>
                    <div class="d-flex justify-content-around">
                        <a href="indexView.php" class="btn btn-voltar">CANCELAR</a>
                        <button class="btn btn-entrar" type="submit" value="entrar">CADASTRAR</button>
                    </div>

                    <?php
                    if ($_POST) {
                        cadastraCliente($conexao);
                    }

                    ?>
                </div>
            </div>
        </form>
    </div>

    <?php include('footer-clienteView.php') ?> 

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>