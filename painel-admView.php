<?php
include('conexao.php');
include('logica-loginAdm.php');
include('logica-cadastroProduto.php');
include('logica-deletaProduto.php');
//Logica-loginAdm
verificaSeAdministradorEstaLogado();
PegaNomeDoAdministradorLogado();
//Logica-cadastroProduto
$listaProduto = dadosProduto($conexao);

if (isset($_GET['id_produto'])) {
    deletaProduto($conexao);
}
$listaProduto = dadosProduto($conexao);
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

<body id="background-lista">

    <?php include('header-painel-admView.php'); ?>

    <div class="container" id="container-lista">
        <div class="row">
            <div class="col-md-12">
                <!--PAINEL DE PRODUTO-->
                <h4> Painel de Produto </h4>
                <div class="d-flex justify-content-between">
                    <div class="nome-adm">
                        <!--NOME DO ADMINISTRADOR-->
                        <h4>Olá <?php echo pegaNomeDoAdministradorLogado(); ?>! </h4>
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
            <table class="table table-borderless table-responsive-md table-hover">
                <thead>
                    <tr id="table-cabecalho">
                        <th>COD</th>
                        <th>NOME</th>
                        <th>DESCRIÇÃO</th>
                        <th>CATEGORIA</th>
                        <th>TAM</th>
                        <th>COR</th>
                        <th>PREÇO</th>
                        <th>FOTO</th>
                        <th>AÇÕES</th>
                    </tr>

                </thead>
                <!--Estrutura de repetição, que vai executar de acordo com a quantidade de registros armazenados no fetch_array-->
                <!--Organiza os dados em formato de array-->
                <?php while ($dado = $listaProduto->fetch_array()) { ?>
                    <tbody>
                        <tr id="table-lista">
                            <!--ele localiza pela nome da variavél-->
                            <td> <?php echo $dado['id_produto']; ?> </td>
                            <td> <?php echo $dado['nome_produto']; ?> </td>
                            <td> <?php echo $dado['descricao_produto']; ?> </td>
                            <td> <?php echo $dado['nome_categoria']; ?> </td>
                            <td> <?php echo $dado['tamanho']; ?> </td>
                            <td> <?php echo $dado['nome_cor']; ?> </td>
                            <td> <?php echo $dado['preco_produto']; ?> </td>
                            <td>
                                <img src="assets/img/produto/<?php echo $dado['imagem_produto']; ?>" width='50px' heigth='50px' class="img-card">
                            </td>

                            <td class="d-flex acao-lista">
                                <!--Nesta linha, a variavel id_produto está recendo a variavel $dado['id_produto'], que já contém o Id de cada produto-->
                                <!-- BOTÃO DE ALTERA -->
                                <a href="altera-produtoView.php?id_produto=<?php echo $dado['id_produto']; ?>" class="btn">
                                    <i class="fas fa-pen"></i> </a>
                                <!-- BOTÃO DE DELETAR - CHAMA O MODAL -->
                                <a href="painel-admView.php" class="btn" role="button" data-toggle="modal" data-target="#idmodal<?php echo $dado['id_produto']; ?>">
                                    <i class="far fa-trash-alt"></i> </a>
                            </td>
                        </tr>
                    </tbody>
                    <!-- MODAL -->
                    <div class="modal fade" id="idmodal<?php echo $dado['id_produto']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <!-- TÍTULO MODAL -->
                                <div class="modal-header">
                                    <h5 class="modal-title">Atenção!</h5>
                                </div>
                                <!-- CONTEÚDO MODAL -->
                                <div class="modal-body">
                                    <h5 class="text-center"> Deseja realmente excluir este produto? </h5>
                                </div>
                                <div class="modal-footer">
                                    <div class="d-flex justify-content-between">
                                        <a href="painel-admView.php?id_produto=<?php echo $dado['id_produto'];  ?>" class="btn btn-deletar" role="button">DELETAR</a>
                                        <a href="painel-admView.php" class="btn btn-sair" role="button">SAIR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FIM DO MODAL -->
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