<?php
include('conexao.php');
include('logica-loginCliente.php');
include('logica-cadastroProduto.php');
$listaProduto = dadosProduto($conexao);

//Essa função pega o IP do usuário 
$ip_provisorio = getHostByName(getHostName());
//Essa variável armazena o nome que eu defini para o cookie
$nome_cookie = "ip_provisorio";

//Ele add na variável cookie o id e nome 
setcookie($nome_cookie, $ip_provisorio);


$idClienteCookie = $_COOKIE['ip_provisorio'];


// Count ele conta(*) os registros do banco
// As é um recurso que nomeia uma apelido para a função anterior 
$select_totalCarrinho = "SELECT count(*) AS quantidade  FROM carrinho WHERE cookie_carrinho =  '$idClienteCookie' ";

$resultado_total = mysqli_query($conexao, $select_totalCarrinho);
$total_carrinho = mysqli_fetch_array($resultado_total);

?>

<?php

include("conexao.php");
//Pesquisa de produtos
$consulta = "SELECT * FROM produto";

//Verifica se o formulário foi submetido
if (isset($_GET['txtpesquisa'])) {
    $pesquisa = $_GET['txtpesquisa'];
    $consulta = "SELECT * FROM produto WHERE nome_produto LIKE '%$pesquisa%'";
}

// echo $consulta;
$con = @mysqli_query($conexao, $consulta) or die($mysql->error);

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
    <?php include("header-indexView.php") ?>
    <!--CAROUSEL-->
    <?php include("carouselView.php") ?>

    <div class="container">

        <div class="row">
            <div class="col-md-6" id="nome-cliente">
                <h4>Olá <?php echo pegaNomeDoClienteLogado(); ?>! </h4>
            </div>

            <div class="col-md-6">
                <form method="get" action="indexView.php" id="form-pesquisa">
                    <div id="contador">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="carrinhoView.php"> <i class="fas fa-shopping-cart"></i> (<?php echo $total_carrinho['quantidade']; ?>) </a>
                            </li>
                            <li class="list-inline-item" id="input-pesquisa">
                                <input type="text" class="form-control" name="txtpesquisa" aria-describedby="pesquisa" aria-describedby="pesquisa" placeholder=" Pesquisar">
                            </li>
                            <li class="list-inline-item">
                                <button type="submit" class="btn btn-ir"><i class="fas fa-search"></i> </button>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php while ($dado = $listaProduto->fetch_array()) { ?>
                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="card card-listaProdutos h-100 text-center shadow">
                        <p class="text-center"><img src="assets/img/produto/<?php echo $dado['imagem_produto']; ?>" width='150px' heigth='150px' class="img-card"></p>
                        <h4> <?php echo $dado['nome_produto']; ?> </h4>
                        <p> <?php echo $dado['descricao_produto']; ?> </p>
                        <p> Tamanho: <?php echo $dado['tamanho']; ?> </p>
                        <h5> R$ <?php echo $dado['preco_produto']; ?> </h5>
                        <div class="text-center">
                            <a href="logica-carrinho.php?id_produto=<?php echo $dado['id_produto']; ?>&ip_provisorio=<?php echo $ip_provisorio ?>" role="button" class="btn btn-carrinho"> Carrinho <i class="fas fa-shopping-cart"></i> </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

   <?php include('footer.php') ?> 

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>