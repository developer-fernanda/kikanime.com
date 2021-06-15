<header>
    <!--NAV SUPERIOR-->
    <nav id="navSuperior" class="fixed-top">
        <div class="container d-flex justify-content-between ">
            <div class="list-login d-none d-lg-block">
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
                <a href="cadastro-clienteView.php"><i class="far fa-user"></i> Cadastrar-se</a>
                </li>
                <li class="list-inline-item">
                    <a href="login-clienteView.php"><i class="fas fa-user"></i> Login</a>
                </li>
            </ul>

        </div>
    </nav>
    <!--NAV INFERIOR-->
    <!-- style="position: fixed; margin-top:45px; z-index:700; margin-right:0px;" -->
    <nav class="navbar navbar-expand-lg" id="navInferior">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"><i class="fas fa-bars p-1"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <div class="container d-flex justify-content-between">
                <ul class="navbar-nav">
                    <li class="nav-item">

                    </li>
                </ul>
                <ul class="navbar-nav" id="navList">
                    <li class="nav-item px-2">
                        <a class="nav-link" href="indexView.php">
                            HOME
                        </a>
                    </li>

                    <li class="nav-item px-2">
                        <a class="nav-link" href="index.php">
                            SOBRE
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            CATEGORIA
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdown">
                            <a class="dropdown-item" href="cad_usuario.php">Camisetas</a>
                            <a class="dropdown-item" href="cad_fornecedor.php">Moletom</a>
                            <a class="dropdown-item" href="cad_cliente.php">Canecas</a>
                            <a class="dropdown-item" href="cad_produto.php">Almofadas decorativas</a>
                        </div>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="index.php">
                            BLOG
                        </a>
                    </li>
                </ul>

                <ul class="list-inline d-none d-lg-block">
                    <li class="list-inline-item" id="input-pesquisa">
                        <input type="text" class="form-control" name="txtpesquisa" aria-describedby="pesquisa" placeholder=" Pesquisar">
                    </li>
                    <li class="list-inline-item">
                        <button type="submit" class="btn btn-ir"><i class="fas fa-search"></i> </button>
                    </li>
                </ul>

            </div>
        </div>

    </nav>

</header>