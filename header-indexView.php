<?php include_once("logica-loginCliente.php"); ?>
<header>
    <!--NAV SUPERIOR-->
    <div class="fixed-top">
        <nav id="navSuperior">
            <div class="container d-flex justify-content-between ">
                <div class="list-login d-none d-lg-block">
                    <img src="assets/img/logo/logo-kik.png" alt="logo" class="logo-kik" style="z-index:700">
                </div>
                <div class="list-botoes d-none d-lg-block">
                    <a target="_blank" class="btn btn-redes-sociais" href="https://instagram.com/kik.mein?utm_medium=copy_link"> <i class="fab fa-instagram"></i> </a>
                    <a target="_blank" class="btn btn-redes-sociais" href="https://www.facebook.com/henrique.viola.507"><i class="fab fa-facebook-square"></i> </a>
                    <a target="_blank" class="btn btn-redes-sociais" href="https://wa.me/551199683-0998"> <i class="fab fa-whatsapp"></i> </a>
                </div>
                <ul class="list-inline list-login">
                    <li class="list-inline-item">
                        <a href="cadastro-clienteView.php"><i class="far fa-user"></i> Cadastrar</a>
                    </li>
                    <?php
                    if (!isset($_SESSION["email_cliente_logado"])) {

                    ?>
                        <li class="list-inline-item">
                            <a href="login-clienteView.php"><i class="fas fa-user"></i> Login</a>
                        </li>
                    <?php } else { ?>
                        <li class="list-inline-item">
                            <a href="login-clienteView.php"><i class="fas fa-user"></i> <?php echo pegaNomeDoClienteLogado(); ?></a>
                        </li>
                    <?php } ?>
                    <li class="list-inline-item">
                        <a href="logoutCliente.php"> <i class="fas fa-sign-out-alt"></i> Sair </a>
                    </li>

                </ul>
            </div>
        </nav>
        <!--NAV INFERIOR-->
        <nav class="navbar navbar-expand-lg" id="navInferior">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"><i class="fas fa-bars p-1"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <div class="container d-flex justify-content-between">
                    <div>

                    </div>
                    <ul class="navbar-nav" id="navList">
                        <li class="nav-item px-2">
                            <a class="nav-link" href="indexView.php">
                                HOME
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CATEGORIA
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdown">

                                <a class="dropdown-item" href="indexView.php">Todos</a>
                                <a class="dropdown-item" href="indexView.php?categoria=1">Camisetas</a>
                                <a class="dropdown-item" href="indexView.php?categoria=2">Moletom</a>
                                <a class="dropdown-item" href="indexView.php?categoria=3">Canecas</a>
                                <a class="dropdown-item" href="indexView.php?categoria=4">Almofadas decorativas</a>

                            </div>
                        </li>

                        <li class="nav-item px-2">
                            <a class="nav-link" href="portfolioView.php">
                                PORTFÓLIO
                            </a>
                        </li>

                        <?php
                        if (isset($_SESSION["email_cliente_logado"])) {
                        ?>
                            <li class="nav-item px-2">
                                <a class="nav-link" href="meus-pedidosView.php">
                                    MEUS PEDIDOS
                                </a>
                            </li>

                        <?php } ?>

                        <li class="nav-item px-2">
                            <a class="nav-link" href="carrinhoView.php"> CARRINHO </a>
                        </li>
                    </ul>
                    <div>

                    </div>
                </div>
            </div>

        </nav>
    </div>
</header>