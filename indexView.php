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
    <?php include("headerView.php") ?>
    <!--CAROUSEL-->
    <?php include("carouselView.php") ?>

    <div class="container">
        <div class="row">     
           <?php while ($dado = $listaProduto->fetch_array()) { ?>
                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="card card-listaProdutos h-100 text-center shadow">
                        <p class="text-center"><img src="assets/img/produto/<?php echo $dado['imagem_produto']; ?>" width='250px' heigth='250px'></p>
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