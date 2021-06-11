<?php
include('conexao.php');
include('logica-loginAdm.php');
verificaSeAdministradorEstaLogado();
include('logica-alteraProduto.php');
$dado = selecionaProduto($conexao);

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
            <form name="formcadastroProduto" method="post"  >
                <div class="offset-lg-3 col-lg-6" id="form-cadastro-produto">
                    <h6>ALTERAÇÃO DE PRODUTO </h6>
                    <div class="form-row">
                    <div class="form-group col-md-2">
                            <label for="txtid_produto"> Cod </label>
                            <input type="text" class="form-control" name="txtid_produto" value='<?php echo $dado['id_produto']; ?>' readonly>
                        </div>
                        <div class="form-group col-md-10">
                            <label for="txtnome_produto"> Nome do produto </label>
                            <input type="text" class="form-control" name="txtnome_produto" value='<?php echo $dado['nome_produto']; ?>'>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="txtcategoria_produto"> Categoria </label>
                            <input type="text" class="form-control" name="txtcategoria_produto" value='<?php echo $dado['categoria_produto']; ?>'>
                         </div>
                        <div class="form-group col-md-6">
                            <label for="txtsubCategoria_produto"> Sub Categoria </label>
                            <input type="text" class="form-control" name="txtsubCategoria_produto" value='<?php echo $dado['subCategoria_produto']; ?>'>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="txttamanho_produto"> Tamanho </label>
                            <input type="text" class="form-control" name="txttamanho_produto" value='<?php echo $dado['tamanho_produto']; ?>'>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="txtcor_produto"> Cor </label>
                            <input type="text" class="form-control" name="txtcor_produto" value='<?php echo $dado['cor_produto']; ?>'>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="txtquantidade_produto"> Quantidade </label>
                            <input type="text" class="form-control" name="txtquantidade_produto" value='<?php echo $dado['quantidade_produto']; ?>'>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="txtpreco_produto"> Preço </label>
                            <input type="text" class="form-control" name="txtpreco_produto" value='<?php echo $dado['preco_produto']; ?>'>
                        </div>
                        <div class="form-group col-md-9">
                            <label for="txtimagem_produto"> Adicionar Imagem</label>
                            <input type="file" class="form-control" name="txtimagem_produto" value='<?php echo $dado['imagem_produto']; ?>'>
                        </div>
                    </div>
                    <div class="d-flex justify-content-around">
                        <a href="painel-admView.php" class="btn btn-voltar">VOLTAR</a>
                        <button class="btn btn-entrar" type="submit" value="alterar">ALTERAR</button>
                    </div>

                    <?php
                    if ($_POST) {
                        alterarProduto($conexao);
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