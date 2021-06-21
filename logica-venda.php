<?php
session_start();
include("conexao.php");
include("logica-cadastroCliente.php");

try {

    // Se o cliente não está logado
    if (!isset($_SESSION["email_cliente_logado"])) {
        echo "<script> window.location.href = 'login-clienteView.php' </script>";
    } else {
        // Se cliente estiver logado
        $cliente = obtemClientePorEmail($conexao);

        //Recupera o ID do cliente
        $idCliente = $cliente['id_cliente'];

        //Recupera o total do carrinho
        $selectTotalCarrinho = "SELECT sum(produto.preco_produto) as total_carrinho FROM carrinho 
                                INNER JOIN produto ON produto.id_produto = carrinho.id_produto
                                WHERE carrinho.id_cliente = $idCliente";

        $resultadoTotalCarrinho = @mysqli_query($conexao, $selectTotalCarrinho);
        // Se ele recupera o total do carrinho
        if ($resultadoTotalCarrinho == true) {

            $totalCarrinhoArray = mysqli_fetch_array($resultadoTotalCarrinho);

            $totalCarrinho = $totalCarrinhoArray['total_carrinho'];

            $insert_venda = "INSERT INTO venda VALUES (0, $idCliente, now(), $totalCarrinho)";
            //Se conseguir recuperar todos os dados
            //Insere na tabela de venda
            $resultadoInsertVenda = @mysqli_query($conexao, $insert_venda);
            if ($resultadoInsertVenda == true) {
                //Recupera o ultimo Id da venda
                $idVenda = @mysqli_insert_id($conexao);

                //Recupera o ID do produto
                //Recupera o preco do produto
                $select_carrinho = "SELECT produto.id_produto, produto.preco_produto FROM carrinho 
                INNER JOIN produto ON produto.id_produto = carrinho.id_produto
                WHERE carrinho.id_cliente = $idCliente";

                $resultadoCarrinho = @mysqli_query($conexao, $select_carrinho);

                $insert_item_venda = "";

                while ($item = $resultadoCarrinho->fetch_array()) {
                    $preco_produto = $item['preco_produto'];
                    $id_produto = $item['id_produto'];
                    // A quantidade está definida com sendo igual a 1
                    $quantidade = 1;
                    // A quantidade do produto x o preço do produto
                    $total = $quantidade * $preco_produto;
                    //Caso recupere todos os dados, ele executa o comando de insert na tabela de item
                    $insert_item_venda = "INSERT INTO item_venda VALUES (0, $id_produto, $idVenda, $quantidade, $total);";
                    $resultadoInsercaoItens = @mysqli_query($conexao, $insert_item_venda);
                }
                //Se conseguir inserir na tabela de item_venda ele deleta os produtos do carrinho
                if ($resultadoInsercaoItens == true) {

                    $delete_carrinho = "DELETE FROM carrinho WHERE id_cliente = $idCliente";

                    echo $delete_carrinho;

                    $resultado_delete = mysqli_query($conexao, $delete_carrinho);

                    if ($resultado_delete == true) {
                        //Deleta o carrinho do cliente e direciona para tabela de confirmação
                        echo '<script>
                                window.location.href = "confirmacao-vendaView.php";
                             </script>';
                    } else {
                        //Erro ao deletar o carrinho do cliente
                        echo '<script>
                                window.location.href = "indexView.php";
                            </script>';
                    }
                } else {
                    //Erro ao inserir os itens na tabela de item venda
                   echo '<script>
                            window.location.href = "indexView.php";
                         </script>';
                }
            } else {
                //Erro ao inserir  na tabela de venda
                echo '<script>
                        window.location.href = "indexView.php";
                     </script>';
            }
            //Não conseguiu recuperar o total do carrinho
        } else {
            echo '<script>
                    window.location.href = "indexView.php";
                 </script>';
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
