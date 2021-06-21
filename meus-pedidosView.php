<?php
include('conexao.php');
include('logica-loginCliente.php');
include('logica-cadastroCliente.php');

//recupera o cookie
$idClienteCookie = $_COOKIE['ip_provisorio'];

$select_carrinho = "";
$resultado_select = null;

if (!isset($_SESSION["email_cliente_logado"])) {
    echo "<script> window.location.href = 'indexView.php' </script>";
} else {

    $cliente = obtemClientePorEmail($conexao);

    $idCliente = $cliente['id_cliente'];

    //seleciona os dados 
    $select_pedidos = "SELECT * FROM venda WHERE id_cliente = $idCliente";

    $resultado_select = mysqli_query($conexao, $select_pedidos);
}




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

    <div class="container">
        <div class="row" id="carrinhoCompra">
            <div class="col-md-12">
                <!--CARRINHO-->
                <h4> CARRINHO DE COMPRAS </h4>
            </div>
            <!--NOME DO CLIENTE-->
            <div class="col-md-6">
                <div class="nome-cliente">
                    <h4>Olá, <?php echo pegaNomeDoClienteLogado(); ?>! </h4>
                </div>
            </div>
            <div class="col-md-6">
                <div id="botoes-carrinho" class="d-flex justify-content-end">
                    <!--BOTÕES-->
                    <a href="indexView.php" class="btn btn-carrinho"> Comprar mais </a>
                </div>
            </div>


        </div>

        <div class="container">
            <div class="row">
                <!--COLUNA -->
                <?php while ($lista_pedido =  mysqli_fetch_array($resultado_select)) { ?>
                    <div class="col-lg-6 mt-4">
                        <div class="card card-listaProdutos h-100 text-center shadow">
                            <div class="d-flex">
                                <div class="col-lg-1">
                                    <i class="fas fa-tshirt"></i>
                                </div>
                                <div class="col-lg-10">
                                    <h5> Número do pedido: <?php echo $lista_pedido['id_venda']; ?> </h5>
                                    <h5> Data: <?php echo $lista_pedido['data_venda']; ?> </h5>
                                    <h5> Total: <?php echo $lista_pedido['total_venda']; ?> </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php include('footer-clienteView.php') ?>

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>