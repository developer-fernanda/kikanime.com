<?php

include('conexao.php');
include('logica-loginAdm.php');

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
    <!--NAV SUPERIOR-->
    <nav id="navSuperior">
        <div class="container d-flex justify-content-between ">
            <div class="list-login ">
                <img src="assets/img/logo/logo-kik.png" alt="logo" class="logo-kik">
            </div>
            <div class="list-botoes d-none d-md-block d-lg-block">
                <a target="_blank" class="btn btn-redes-sociais" href="https://www.facebook.com/henrique.viola.507"> <i class="fab fa-discord"></i> </a>
                <a target="_blank" class="btn btn-redes-sociais" href="https://instagram.com/kik.mein?utm_medium=copy_link"> <i class="fab fa-instagram"></i> </a>
                <a target="_blank" class="btn btn-redes-sociais" href="https://www.facebook.com/henrique.viola.507"><i class="fab fa-facebook-square"></i> </a>
                <a target="_blank" class="btn btn-redes-sociais" href="https://wa.me/551199683-0998"> <i class="fab fa-whatsapp"></i> </a>
            </div>
            <ul class="list-inline list-login">
                <li class="list-inline-item">
                    <!-- <a href="logoutAdm.php"> <i class="far fa-user"></i> Trocar </a> -->
                    <a href="logoutAdm.php"> <i class="fas fa-sign-out-alt"></i> Sair </a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="background-login-adm">
        <div class="container">
            <form name="formloginAdm" method="post">
                <div class="form-row">
                    <div class="offset-lg-3 col-lg-6" id="form-login-adm">
                        <h6>LOGIN DO ADMINISTRADOR </h6>
                        <div class="form-group">
                            <label for="txtemail_adm"> E-mail </label>
                            <input type="text" class="form-control" name="txtemail_adm" placeholder="Digite seu e-mail">
                        </div>
                        <div class="form-group">
                            <label for="txtsenha_adm"> Senha </label>
                            <input type="password" class="form-control" name="txtsenha_adm" placeholder="Sua senha">
                        </div>
                        <div class="d-flex justify-content-around">
                            <a href="indexView.php" class="btn btn-entrar">IR PARA SITE</a>
                            <button type="submit" class="btn btn-entrar">ENTRAR</button>
                        </div>
                        <br>
                        <!-- Verifica se existe uma declaração na variável-->
                        <div class="text-center">
                            <?php
                            if ($_POST) {
                                logaAdm($conexao);
                            }

                            ?>
                        </div>

                    </div>
                </div>

            </form>

        </div>
    </div>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>