<?php
session_start();
include('conexao.php');

$select_estampa = "SELECT * FROM estampa";

$resultado_select = mysqli_query($conexao, $select_estampa);

$estampa = $resultado_select;

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

    <div class="container">
        <section class="row" id="portfolio">
            <div class="col-12 text-center">
                <h4> PORTFÓLIO </h4>

                <p> Nosso portfólio de estampas possui uma variedade de temas que vai desde desenhos inspirados em animes famosos, mangás, cartoon, a criações próprias do artista. Veja nossas estampas e escolha aquela que mais gostar. </p>
            </div>

            <?php while ($imagem = $estampa->fetch_array()) { ?>
                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="card card-body h-100">
                        <img src="assets/img/produto/<?php echo $imagem['nome_estampa']; ?>" class="img-estampa">
                    </div>
                </div>
            <?php } ?>
        </section>
    </div>

    <?php include('footer-clienteView.php') ?> 

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>