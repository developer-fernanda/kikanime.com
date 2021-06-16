<?php
include('conexao.php');
include('logica-loginCliente.php');
include('logica-carrinho.php');

$idClienteCookie = $_COOKIE['ip_provisorio'];

$select_carrinho = "SELECT * FROM carrinho INNER JOIN produto ON produto.id_produto = carrinho.id_produto INNER JOIN cliente on cliente.id_cliente = carrinho.id_cliente WHERE cookie_carrinho =  $idClienteCookie";

$resultado_select = mysqli_query($conexao, $select_carrinho);

var_dump($resultado_select);
die();

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
    <!--HEADER-->
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
                    <a href="indexView.php"><i class="fas fa-arrow-left"></i> Voltar </a>
                    <a href="logoutAdm.php"> <i class="fas fa-sign-out-alt"></i> Sair </a>
                </li>
            </ul>

        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12" id="carrinhoCompra">
                <!--CARRINHO-->
                <h4> CARRINHO DE COMPRAS </h4>
                <!--NOME DO CLIENTE-->
                <div class="d-flex justify-content-between">
                    <div class="nome-cliente">
                        <h4>Olá kikasManinas! </h4>
                    </div>
                    <div id="botoes-lista">
                        <!--BOTÃO FINALIZAR-->
                        <a href="painel-admView.php" class="btn"> Finalizar </a>
                    </div>
                </div>
            </div>
            <!--COLUNA -->
            <?php while ($lista_carrinho = mysqli_fetch_assoc($resultado_select)) { ?>
                <div class="col-lg-6 mt-4">
                    <div class="card card-listaProdutos h-100 text-center shadow">
                        <div class="d-flex">
                            <div class="col-md-6">
                                <p class="text-center"><img src="assets/img/produto/<?php echo $lista_carrinho ['imagem_produto']; ?>" width='200px' heigth='200px'></p>
                            </div>
                            <div class="col-md-6 mt-5">
                                <h5> <?php echo $lista_carrinho ['nome_descricao']; ?> </h5>
                                <p> Tamanho: <?php echo $lista_carrinho ['tamanho']; ?> </p>
                                <h5> R$ <?php echo $lista_carrinho ['preco_produto']; ?> </h5>
                                <div class="text-center">
                                    <a href="#" class="btn btn-carrinho"> <i class="fas fa-trash-alt"></i> Excluir </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>