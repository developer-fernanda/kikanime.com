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


<body id="background-lista">
    <div class="container" id="container-lista">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <!--CADSTRO DE PRODUTO-->
                    <h4> Cadastro de Produtos </h4>                    
                    <a href="logout-usuario.php" class="btn btn-sair">Sair</a>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="nome-adm">
                        <!--NOME DO ADMINISTRADOR-->
                        <h4>Olá, Kikanime.com! </h4>
                    </div>
                    <div id="botoes-lista">
                        <!--BOTÃO CADASTRO-->
                        <a href="cadastro-produtoView.php" class="btn"><i class="fas fa-plus"></i> Novo </a>
                        <!--BOTÃO ATUALIZAR-->
                        <a href="painel-admView.php" class="btn"> <i class="fas fa-redo-alt"></i></a>
                    </div>
                </div>

            </div>

            <!-- LISTA DE PRODUTOS CADASTRADOS-->
            <table class="table table-borderless table-responsive-md table-hover" >
                <thead>
                    <tr id="table-lista">
                        <th>CÓDIGO</th>
                        <th>NOME</th>
                        <th>DESCRIÇÃO DO PRODUTO</th>
                        <th>PREÇO</th>
                        <th>FOTO</th>
                        <th>AÇÕES</th>
                    </tr>

                </thead>
                <!--Estrutura de repetição, que vai executar de acordo com a quantidade de registros armazenados no fetch_array-->
                <!-- <?php while ($dado = $listaProdutos->fetch_array()) { ?> -->
                    <!--Organiza os dados em formato de array-->
                    <tbody>
                        <tr>
                            <!--ele localiza pela nome da variavél-->
                            <!-- <td> <?php echo $dado['id_produto']; ?> </td>
                            <td> <?php echo $dado['nome_produto']; ?> </td>
                            <td> <?php echo $dado['descricao_produto']; ?> </td>
                            <td> <?php echo $dado['preco_produto']; ?> </td> -->
                            <td>
                                <img src="assets/img/produtos/<?php echo $dado['foto_produto']; ?>" width='50px' heigth='50px'>
                            </td>

                            <td class="text-center ">
                                <!--Nesta linha, a variavel id_produto está recendo a variavel $dado['id_produto'], que já contém o Id de cada produto-->
                                <!-- <a href="cadastro-produto.php?id_produto=<?php echo $dado['id_produto']; ?>" role="button"> -->
                                    <i class="far fa-trash-alt"></i> </a>

                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
            <!--Fim da Tabela-->
        </div>

    </div>



    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>