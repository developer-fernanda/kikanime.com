<?php


function deletaProduto($conexao){
    //Essa variavél pode capturar valores através da URL - Neste caso, ela irá receber o ID do meu produto
    //Para que isso ocorra, é preciso apontar na outra página o valor que ela irá conter (Linha 117)
    $id_produto = $_GET['id_produto'];

    $deleta_produto ="DELETE FROM produto WHERE id_produto = $id_produto";

    $resultado_deleta = mysqli_query($conexao, $deleta_produto);


    if ($resultado_deleta == true) {
        echo '<div class="alert alert-danger text-center" role="alert" style="height: 50px; width: 290px;">
                <i class="fas fa-trash-alt h5"> </i> Produto deletado com sucesso!
              </div>';
    }

}


?>
