<?php

include('conexao.php');
     
    $cod_produto = $_POST['txtid_produto'];
    $descricao_produto = $_POST['txtdescricao_produto'];
    $categoria_produto = $_POST['txtcategoria_produto'];
    $tamanho_produto = $_POST['txttamanho_produto'];
    $cor_produto = $_POST['txtcor_produto'];
    $quantidade_produto = $_POST['txtquantidade_produto'];
    $preco_produto = $_POST['txtpreco_produto'];
    $imagem_produto = $_POST['txtimagem_produto'];

    //CRIANDO A LINHA DO UPDATE
    $update_produto = "UPDATE produto SET id_descricao='$descricao_produto', id_categoria=$categoria_produto, id_tamanho=$tamanho_produto, id_cor=$cor_produto, quantidade_produto=$quantidade_produto, preco_produto='$preco_produto', imagem_produto='$imagem_produto' WHERE id_produto=$cod_produto " ;
   

    //EXECUTANDO INSTRUÇÃO
    $resultado_update = @mysqli_query($conexao, $update_produto);

    ?>
    <script>
       window.location.href="painel-admView.php?cadastro_sucesso=1";
     </script>
     <?php

    
    ?>