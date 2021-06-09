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
                            <label for="txtpreco_produto"> Categoria </label>
                            <select class="form-control" name="txtpreco_produto">
                                <option value="ROUPAS">ROUPAS</option>
                                <option value="UTENSÍLIOS">UTENSÍLIOS</option>
                                <option value="DECORAÇÃO">DECORAÇÃO</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtpreco_produto"> Sub Categoria </label>
                            <select class="form-control" name="txtpreco_produto">
                                <option value="CAMISETA">CAMISETA</option>
                                <option value="MOLETOM">MOLETOM</option>
                                <option value="CANECAS">CANECAS</option>
                                <option value="CANECAS">ALMOFADAS DECORATIVAS</option>
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
                                <option value="preto">PRETO</option>
                                <option value="branco">BRANCO</option>
                                <option value="cinza">CINZA</option>
                                <option value="azul">AZUL</option>
                                <option value="vermelho">VERMELHO</option>
                                
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="txtpreco_produto"> Valor do Produto</label>
                            <input type="text" class="form-control" name="txtpreco_produto" placeholder="Digite o valor">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="txtfoto_produto"> Adicionar Imagem</label>
                            <input type="file" name="txtfoto_produto" style="color: white;">
                        </div>
                    </div>
                    <div class="d-flex justify-content-around">
                        <a href="painel-admView.php" class="btn btn-voltar">VOLTAR</a>
                        <button class="btn btn-entrar" type="submit" value="entrar">CADASTRAR</button>
                    </div>
                </div>
        </div>
        </form>

    </div>
    </div>

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>