<?php
function cadastrarProduto($conexao){
    //Essa função cadastra o produto no banco ao ser chamada 
    $descricao_produto = $_POST['txtdescricao_produto'];
    $categoria_produto = $_POST['txtcategoria_produto'];
    $tamanho_produto = $_POST['txttamanho_produto'];
    $cor_produto = $_POST['txtcor_produto'];
    $quantidade_produto = $_POST['txtquantidade_produto'];
    $preco_produto = $_POST['txtpreco_produto'];
    $imagem_produto = $_POST['txtimagem_produto'];

    $insert_produto = "INSERT INTO produto VALUES (0, '$descricao_produto', '$categoria_produto', '$tamanho_produto', 
    '$cor_produto', '$quantidade_produto', '$preco_produto', '$imagem_produto')";

    $resultado_insert = mysqli_query($conexao, $insert_produto);

    if($resultado_insert == true) {
      ?>
    <script>
        window.location.href="painel-admView.php?cadastro_sucesso=1";
     </script>
     <?php
      } else {
        header('location:cadastro-produtoView.php?cadastro_sucesso=0');
    }
}

//Essa função é utilizada para exibir os produtos no painel do adm
  function dadosProduto($conexao){
  //Seleciona dados do produto 
      $select_produto = "SELECT produto.id_produto, descricao.nome_descricao, tamanho.tamanho, cor.nome_cor, produto.preco_produto, produto.imagem_produto, categoria.nome_categoria FROM produto INNER JOIN descricao ON produto.id_descricao = descricao.id_descricao INNER JOIN categoria ON produto.id_categoria = categoria.id_categoria INNER JOIN tamanho ON produto.id_tamanho = tamanho.id_tamanho INNER JOIN cor ON produto.id_cor = cor.id_cor";
    
      $resultado_select = mysqli_query($conexao, $select_produto);
          
      return $resultado_select;
    }
  

?>




