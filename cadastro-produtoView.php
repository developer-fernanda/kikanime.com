<?php
include('conexao.php');
include('logica-loginAdm.php');
verificaSeAdministradorEstaLogado();
include('logica-cadastroProduto.php');
include('logica-comboBox.php');
//logica-comboBox.php
$listaCategoria = listaCategoria($conexao);
$listaTamanho = listaTamanho($conexao);
$listaCor = listaCor($conexao);

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

    <?php include "header-painel-admView.php"; ?>

    <div id="background-cadastro-adm">
        <div class="container">
            <form name="formcadastroProduto" method="post">
                <div class="offset-lg-3 col-lg-6" id="form-cadastro-produto">
                    <h6>CADASTRO DE PRODUTO </h6>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="txtnome_produto"> Nome do Produto </label>
                            <input class="form-control" type="text" name="txtnome_produto" placeholder="Digite o nome do produto">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="txtdescricao_produto"> Descrição do Produto </label>
                            <input class="form-control" type="text" name="txtdescricao_produto" placeholder="Digite uma descrição">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <!--FUNÇÃO COMBOX-->
                            <label for="txtcategoria_produto"> Categoria </label>
                            <select class="form-control" name="txtcategoria_produto">
                                <?php foreach ($listaCategoria as $categoria) { ?>
                                    <option value='<?php echo $categoria['id_categoria'] ?>'><?php echo $categoria['nome_categoria'] ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <!--FUNÇÃO COMBOX-->
                            <label for="txttamanho_produto"> Tamanho </label>
                            <select class="form-control" name="txttamanho_produto">
                                <?php foreach ($listaTamanho as $tamanho) { ?>
                                    <option value='<?php echo $tamanho['id_tamanho'] ?>'><?php echo $tamanho['tamanho'] ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <!--FUNÇÃO COMBOX-->
                            <label for="txtcor_produto"> Cor </label>
                            <select class="form-control" name="txtcor_produto">
                                <?php foreach ($listaCor as $cor) { ?>
                                    <option value='<?php echo $cor['id_cor'] ?>'><?php echo $cor['nome_cor'] ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="txtquantidade_produto "> Quantidade </label>
                            <select class="form-control" name="txtquantidade_produto">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="txtpreco_produto"> Preço </label>
                            <input type="text" class="form-control" name="txtpreco_produto" placeholder="R$">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="txtimagem_produto"> Adicionar Imagem</label>
                            <input type="file" class="form-control" name="txtimagem_produto">
                        </div>
                    </div>
                    <div class="d-flex justify-content-around">
                        <a href="painel-admView.php" class="btn btn-voltar">CANCELAR</a>
                        <button class="btn btn-entrar" type="submit" value="entrar">CADASTRAR</button>
                    </div>

                    <?php
                    if ($_POST) {
                        cadastrarProduto($conexao);
                    }

                    if (isset($_GET['cadastro_sucesso'])) {
                        if ($_GET['cadastro_sucesso'] == 1) {
                            echo '<div class="alert alert-success text-center" role="alert" style="height: 60px; width: 350px; color:white;">
                                    <i class="fas fa-leaf h5"></i> Produto cadastrado com sucesso!
                                </div>';
                        } else {
                            echo '<div class="alert alert-warning text-center" role="alert" style="height: 60px; width: 350px; color:white;">
                                    <i class="fas fa-leaf h5"></i> Produto não cadastrado!
                                </div>';
                        }
                    }
                    ?>
                </div>

            </form>
        </div>
    </div>

    <?php include('footer-admView.php') ?> 

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>