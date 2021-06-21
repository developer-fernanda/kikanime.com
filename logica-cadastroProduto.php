<?php

function cadastrarProduto($conexao)
{
  //Essa função cadastra o produto no banco ao ser chamada 
  $nome_produto = $_POST['txtnome_produto'];
  $descricao_produto = $_POST['txtdescricao_produto'];
  $categoria_produto = $_POST['txtcategoria_produto'];
  $tamanho_produto = $_POST['txttamanho_produto'];
  $cor_produto = $_POST['txtcor_produto'];
  $quantidade_produto = $_POST['txtquantidade_produto'];
  $preco_produto = $_POST['txtpreco_produto'];
  $imagem_produto = $_POST['txtimagem_produto'];

  $insert_produto = "INSERT INTO produto VALUES (0, '$nome_produto ', '$descricao_produto', '$categoria_produto', '$tamanho_produto', '$cor_produto', '$quantidade_produto', '$preco_produto', '$imagem_produto')";

  $resultado_insert = mysqli_query($conexao, $insert_produto);

  if ($resultado_insert == true) {
?>
    <script>
      window.location.href = "painel-admView.php?cadastro_sucesso=1";
    </script>
<?php
  } else {
    header('location:cadastro-produtoView.php?cadastro_sucesso=0');
  }
}

function dadosProdutosPorCategoria($conexao) {
  $id_categoria = $_GET['categoria'];

  $consulta = "SELECT * FROM produto
  INNER JOIN categoria ON produto.id_categoria = categoria.id_categoria
  INNER JOIN tamanho ON produto.id_tamanho = tamanho.id_tamanho 
  INNER JOIN cor ON produto.id_cor = cor.id_cor
  WHERE categoria.id_categoria = $id_categoria";

  $listaCategoria = @mysqli_query($conexao, $consulta);

  return $listaCategoria;
}

function dadosProdutoFiltrados($conexao) {
  
  $pesquisa = $_GET['txtpesquisa'];

  $consulta = "SELECT * FROM produto
  INNER JOIN categoria ON produto.id_categoria = categoria.id_categoria
  INNER JOIN tamanho ON produto.id_tamanho = tamanho.id_tamanho 
  INNER JOIN cor ON produto.id_cor = cor.id_cor
  WHERE nome_produto LIKE '%$pesquisa%'";

  $listaProduto = @mysqli_query($conexao, $consulta);

  return $listaProduto;
}

//Essa função é utilizada para exibir os produtos no painel do adm
function dadosProduto($conexao)
{
  //Seleciona dados do produto 
  $select_produto = "SELECT * FROM produto  
      INNER JOIN categoria ON produto.id_categoria = categoria.id_categoria
      INNER JOIN tamanho ON produto.id_tamanho = tamanho.id_tamanho 
      INNER JOIN cor ON produto.id_cor = cor.id_cor ORDER BY produto.nome_produto" ;

  $resultado_select = mysqli_query($conexao, $select_produto);

  return $resultado_select;

}


?>