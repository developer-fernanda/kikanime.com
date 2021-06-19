<?php

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
        <section class="row" id="sobre">
            <div class="col-12 text-center">
                <h4> GALERIA DE FOTOS </h4>
            </div>
            <div class="col-lg-4">
                <div class="d-flex">
                    <img src="assets/img/sobre/kik.jpg" class="img-fluid" alt="foto">
                    <div>
                        <h6>Henrique Mesquita </h6>
                        <p>Kik.Mein</p>
                        <br>
                        <p> Digital Graphic Artist, Estudante, 17 anos. </p>
                        <!--BOTÃO CHAMA MODAL-->
                        <a class="btn" data-toggle="modal" data-target="#modal-henrique">Saiba Mais</a>
                        <!--CONTEÚDO MODAL-->
                        <div class="modal fade" id="modal-henrique" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content " id="modal-color">
                                    <!--TITULO MODAL-->
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle"> CURIOSIDADES </h5>
                                    </div>
                                    <!--TEXTO MODAL-->
                                    <div class="modal-body">
                                        <ul>
                                            <li> Música: Trap, Rock e Pop Rock. </li>
                                            <li> Comida preferida: Nhoque e Lasanha. </li>
                                            <li> Animes Preferidos: Jojo e Tengen toppa gurren lagann. </li>
                                            <li> Mangás: Berserk, Shuumatsu no Valkyrie, Sweet Home e One Piece.</li>
                                        </ul>
                                        <div class="modal-redes">
                                            <a target="_blank" class="btn btn-redes-sociais" href="https://instagram.com/kik.mein"> <i class="fab fa-instagram"></i> </a>
                                            <a target="_blank" class="btn btn-redes-sociais" href="https://www.facebook.com/henrique.viola.507"><i class="fab fa-facebook-square"></i> </a>
                                            <a target="_blank" class="btn btn-redes-sociais" href="https://wa.me/551199683-0998"> <i class="fab fa-whatsapp"></i> </a>
                                        </div>
                                    </div>
                                    <!--BOTÃO MODAL-->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-modal" data-dismiss="modal">Sair</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- FIM-->
                    </div>
                </div>
            </div>

            <div class="col-lg-4 ">
                <div class="d-flex">
                    <img src="assets/img/sobre/nanda.jpg" class="img-fluid" alt="foto">
                    <div>
                        <h6>Fernanda Ingrid </h6>
                        <p> Nanda </p>
                        <br>
                        <p> Programming Student, 28 anos. </p>
                        <!--BOTÃO CHAMA MODAL-->
                        <a class="btn" data-toggle="modal" data-target="#modal-nanda">Saiba Mais</a>
                        <!--CONTEÚDO MODAL-->
                        <div class="modal fade" id="modal-nanda" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content " id="modal-color">
                                    <!--TITULO MODAL-->
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle"> CURIOSIDADES </h5>
                                    </div>
                                    <!--TEXTO MODAL-->
                                    <div class="modal-body">
                                        <ul>
                                            <li> Música: Heavy Metal e Rock. </li>
                                            <li> Comida preferida: Pamonha e Pizza.</li>
                                            <li> Animes Preferidos: Naruto, Death Note e Shingeki no Kyojin. </li>
                                        </ul>
                                        <div class="modal-redes">
                                            <a target="_blank" class="btn btn-redes-sociais" href="https://github.com/developer-fernanda"> <i class="fab fa-github"></i> </a>
                                            <a target="_blank" class="btn btn-redes-sociais" href="https://www.facebook.com/fernanda.ingrid.1460/"><i class="fab fa-facebook-square"></i> </a>
                                            <a target="_blank" class="btn btn-redes-sociais" href="https://wa.me/5511995056742"> <i class="fab fa-whatsapp"></i> </a>
                                        </div>
                                    </div>
                                    <!--BOTÃO MODAL-->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-modal" data-dismiss="modal">Sair</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- FIM-->
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex">
                    <img src="assets/img/sobre/lucia.jpg" class="img-fluid" alt="foto">
                    <div>
                        <h6>Lucia Helena </h6>
                        <p> Luh</p>
                        <br>
                        <p> Programming Student, 42 anos, mãe do Kik.Mein </p>
                        <!--BOTÃO CHAMA MODAL-->
                        <a class="btn" data-toggle="modal" data-target="#modal-lucia">Saiba Mais</a>
                        <!--CONTEÚDO MODAL-->
                        <div class="modal fade" id="modal-lucia" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content " id="modal-color">
                                    <!--TITULO MODAL-->
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle"> CURIOSIDADES </h5>
                                    </div>
                                    <!--TEXTO MODAL-->
                                    <div class="modal-body">
                                        <ul>
                                            <li> Música: Rock e MPB. </li>
                                            <li> Comida preferida: Nhoque e Pizza.</li>
                                            <li> Hobbies: Ouvir música e viajar. </li>
                                        </ul>
                                        <div class="modal-redes">
                                            <a target="_blank" class="btn btn-redes-sociais" href="https://github.com/DeveloperLuciaH"> <i class="fab fa-github"></i> </a>
                                            <a target="_blank" class="btn btn-redes-sociais" href="https://www.facebook.com/lucia.violatomaz"><i class="fab fa-facebook-square"></i> </a>
                                            <a target="_blank" class="btn btn-redes-sociais" href="https://wa.me/551197472-7990"> <i class="fab fa-whatsapp"></i> </a>
                                        </div>
                                    </div>
                                    <!--BOTÃO MODAL-->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-modal" data-dismiss="modal">Sair</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- FIM-->
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container">
        <section class="row" id="galeria">
            <?php while ($imagem = $estampa->fetch_array()) { ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-body h-100">
                        <img src="assets/img/produto/<?php echo $imagem['nome_estampa']; ?>" class="img-estampa">
                    </div>
                </div>
            <?php } ?>
        </section>
    </div>

    <?php include('footer.php') ?>

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>