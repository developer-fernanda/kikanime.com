<?php
include('conexao.php');
include('logica-loginAdm.php');
verificaSeAdministradorEstaLogado();
include('logica-cadastroProduto.php');
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

    <div id="background-cadastro-adm">
        <div class="container">
            <form name="formcadastroProduto" method="post">
                <div class="offset-lg-3 col-lg-6" id="form-cadastro-produto">
                    <h6>CADASTRO DE PRODUTO </h6>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="txtnome_produto"> Nome do produto </label>
                            <input type="text" class="form-control" name="txtnome_produto" placeholder="Digite o nome do produto">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="txtcategoria_produto"> Categoria </label>
                            <select class="form-control" name="txtcategoria_produto">
                                <option value="Roupas">Roupas</option>
                                <option value="Utensílios">Utensílios</option>
                                <option value="decoração">Decoração</option>
                            </select>
                         </div>
                        <div class="form-group col-md-6">
                            <label for="txtsubCategoria_produto"> Sub Categoria </label>
                            <select class="form-control" name="txtsubCategoria_produto">
                                <option value="Camiseta">Camiseta</option>
                                <option value="Moletom">Moletom</option>
                                <option value="Caneca">Caneca</option>
                                <option value="Almofadas decorativas">Almofadas decorativas</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="txttamanho_produto"> Tamanho </label>
                            <select class="form-control" name="txttamanho_produto">
                                <option value="UN">UN</option>
                                <option value="P">P</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                                <option value="GG">GG</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="txtcor_produto"> Cor </label>
                            <select class="form-control" name="txtcor_produto">
                                <option value="preto">Preto</option>
                                <option value="branco">Branco</option>
                                <option value="cinza">Cinza</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="txtquantidade_produto"> Quantidade </label>
                            <select class="form-control" name="txtquantidade_produto">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="txtpreco_produto"> Preço </label>
                            <input type="text" class="form-control" name="txtpreco_produto" placeholder="Preço">
                        </div>
                        <div class="form-group col-md-9">
                            <label for="txtimagem_produto"> Adicionar Imagem</label>
                            <input type="file" class="form-control" name="txtimagem_produto">
                        </div>
                    </div>
                    <div class="d-flex justify-content-around">
                        <a href="painel-admView.php" class="btn btn-voltar">VOLTAR</a>
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

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>