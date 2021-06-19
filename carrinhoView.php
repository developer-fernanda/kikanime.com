<?php
include('conexao.php');
include('logica-loginCliente.php');

//recupera o cookie
$idClienteCookie = $_COOKIE['ip_provisorio'];

//seleciona os dados no carrinho 
$select_carrinho = "SELECT * FROM carrinho 
INNER JOIN produto ON produto.id_produto = carrinho.id_produto
INNER JOIN tamanho ON produto.id_tamanho = tamanho.id_tamanho  
INNER JOIN categoria ON produto.id_categoria = categoria.id_categoria
INNER JOIN cor ON produto.id_cor = cor.id_cor WHERE cookie_carrinho =  '$idClienteCookie'";

$resultado_select = mysqli_query($conexao, $select_carrinho);


//seleciona o valor dos produtos do carrinho
$select_total_carrinho = "SELECT SUM(produto.preco_produto) AS total_carrinho FROM carrinho
INNER JOIN produto ON  carrinho.id_produto = produto.id_produto WHERE cookie_carrinho = '$idClienteCookie'";

$resultado_carrinho = mysqli_query($conexao, $select_total_carrinho);

$total_carrinho = mysqli_fetch_assoc($resultado_carrinho);

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
        <div class="row">
            <div class="col-md-12" id="carrinhoCompra">
                <!--CARRINHO-->
                <h4> CARRINHO DE COMPRAS </h4>
                <!--NOME DO CLIENTE-->
                <div class="d-flex justify-content-between">
                    <div class="nome-cliente">
                        <h4>Olá, <?php echo pegaNomeDoClienteLogado();?>! </h4>
                    </div>
                    <div id="botoes-lista">
                        <!--BOTÃO FINALIZAR-->
                        <a href="painel-admView.php" class="btn"> Finalizar </a>
                    </div>
                </div>
                <h5> Valor total do carrinho R$:
                    <?php echo number_format($total_carrinho['total_carrinho'], 2); ?>
                </h5>
            </div>
            <!--COLUNA -->
            <?php while ($lista_carrinho =  mysqli_fetch_array($resultado_select)) { ?>
                <div class="col-lg-12 mt-4">
                    <div class="card card-listaProdutos h-100 text-center shadow">
                        <div class="d-flex">
                            <div class="col-lg-4 ">
                                <p class="text-center"><img src="assets/img/produto/<?php echo $lista_carrinho['imagem_produto']; ?>" width='100px' heigth='100px' class="img-fluid rounded" ></p>
                            </div>
                            <div class="col-lg-4 ">
                                <h5> <?php echo $lista_carrinho['nome_produto']; ?> </h5>
                                <p class="d-none d-md-block d-lg-block"> Descrição: <?php echo $lista_carrinho['descricao_produto']; ?> </p>
                                <p> Tamanho: <?php echo $lista_carrinho['tamanho']; ?> </p>
                                <p> Cor: <?php echo $lista_carrinho['nome_cor']; ?> </p>
                            </div>
                            <div class="col-lg-4 mt-2">
                                <h5> R$ <?php echo $lista_carrinho['preco_produto']; ?> </h5>
                                <div class="text-center">
                                    <a href="indexView.php" class="btn btn-carrinho"> Comprar mais </a>
                                        <br>
                                    <a href="logica-deletaProdCarrinho.php?id_carrinho=<?php echo $lista_carrinho['id_carrinho'];?>" class="btn btn-remover" style="color:tomate"> <i class="fas fa-trash-alt"></i> Remover Item </a>
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