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

    //seleciona os dados da compra
    $select_pedidos = "SELECT * FROM venda WHERE id_cliente = $idCliente";

    $resultado_select = mysqli_query($conexao, $select_pedidos);

    $dado = mysqli_fetch_array($resultado_select);

    //seleciona dados do produto
    $select_produto = "SELECT item_venda.id_produto, produto.nome_produto, produto.imagem_produto, produto.descricao_produto, produto.preco_produto, venda.id_venda, venda.data_venda, venda.total_venda FROM venda
                    INNER JOIN item_venda ON venda.id_venda = item_venda.id_venda 
                    INNER JOIN produto ON produto.id_produto = item_venda.id_produto  
                    WHERE id_cliente = $idCliente";

    $resultado_select_produto = mysqli_query($conexao,  $select_produto);
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
        <div class="row" id="compra">
            <div class="col-12">
                <!--CONFIRMAÇÃO DE COMPRA-->
                <h4> CONFIRMAÇÃO DE COMPRA </h4>
            </div>

            <div class="col-12">
                <p>Parabéns, <?php echo pegaNomeDoClienteLogado(); ?>! Compra efetuada com sucesso! </p>
                <div class="d-flex">
                    <div class="col-md-6">
                        <p> Resumo da compra: </p>
                        <p> Número do Pedido: <?php echo  $dado['id_venda']; ?> </p>
                    </div>
                    <div class="col-md-6">

                        <p> Data: <?php echo   $dado['data_venda']; ?> </p>
                        <p> Total: <?php echo   $dado['total_venda']; ?> </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" id="informacao">
            <?php while ($produto =  mysqli_fetch_array($resultado_select_produto)) { ?>
                <div class="col-lg-6 mt-4">
                    <div class="card card-listaProdutos h-100 text-center shadow">
                        <div class="d-flex">
                            <div class="col-md-4">
                                <p class="text-center"><img src="assets/img/produto/<?php echo $produto['imagem_produto']; ?>" width='150px' heigth='150px' class="img-fluid rounded"></p>
                            </div>
                            <div class="col-md-8">
                                <h5> <?php echo $produto['nome_produto']; ?> </h5>
                                <p> Descrição: <?php echo $produto['descricao_produto']; ?> </p>
                                <p> Valor unitário: <?php echo $produto['preco_produto']; ?> </p>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>

    <?php include('footer-clienteView.php') ?>

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>