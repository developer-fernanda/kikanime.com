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
    <!--Nav-->
    <?php include("headerView.php") ?>

    <?php include("carouselView.php") ?>

    <div class="container">
        <div class="row">

            <!--COLUNA ESQUERDA -->
            <div class="col-md-4" id="colunaEsquerda">
                <!--CATEGORIAS -->
                <p id="categorias">CATEGORIAS</p>
                <ul class="list-unstyled categoriasBody">
                    <li>Roupas</li>
                    <li>Utensílios</li>
                    <li>Almofadas Decorativas</li>
                </ul>
                <!-- XXXXXXXXXXXXX -->
                <p id="categorias">TEXTO 2</p>
                <ul class="list-unstyled categoriasBody">
                    <li>XXXXXX</li>
                    <li>XXXXXXX</li>
                    <li>XXXXX</li>
                    <li>XXXXXXX</li>
                    <li>XXXXX</li>
                </ul>
                <!-- XXXXXXXXXXXXX -->
                <p id="categorias">TEXTO 3</p>
                <ul class="list-unstyled categoriasBody">
                    <li>XXXXXX</li>
                    <li>XXXXXXX</li>
                    <li>XXXXX</li>
                </ul>
            </div>
            <!-- COLUNA DIREITA - PRODUTOS -->
            <div class="col-lg-4 mt-3" id="colunaDireita">
                <div class="card card-anime h-100 text-center">
                    <p> ************************************************************************************************************************************************************************************************************************************************************************************************
                        ************************************************************************************************
                    </p>
                    <h5> Moletom </h5>
                    <p> Lorem ipsum dolor sit amet consectetur. </p>
                    <h4> R$: 100,00 </h4>
                    <div class="text-center">
                        <a href="#" role="button" class="btn btn-carrinho">
                            <i class="fas fa-cart-plus mr-2"></i> Adicionar </a>
                    </div>
                </div>
            </div>

            <!-- COLUNA DIREITA - PROVISÓRIA -->

            <div class="col-lg-4 mt-3" id="colunaDireita">
                <div class="card card-anime h-100 text-center">
                    <p> ************************************************************************************************************************************************************************************************************************************************************************************************
                        ************************************************************************************************
                    </p>
                    <h5> Moletom </h5>
                    <p> Lorem ipsum dolor sit amet consectetur. </p>
                    <h4> R$: 100,00 </h4>
                    <div class="text-center">
                        <a href="#" role="button" class="btn btn-carrinho">
                            <i class="fas fa-cart-plus mr-2"></i> Adicionar </a>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>