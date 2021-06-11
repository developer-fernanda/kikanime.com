<?php
function cadastrarProduto($conexao){
    //Essa função cadastra o produto no banco ao ser chamada 
    $nome_produto = $_POST['txtnome_produto'];
    $categoria_produto = $_POST['txtcategoria_produto'];
    $subCategoria_produto = $_POST['txtsubCategoria_produto'];
    $tamanho_produto = $_POST['txttamanho_produto'];
    $cor_produto = $_POST['txtcor_produto'];
    $quantidade_produto = $_POST['txtquantidade_produto'];
    $preco_produto = $_POST['txtpreco_produto'];
    $imagem_produto = $_POST['txtimagem_produto'];

    $insert_produto = "INSERT INTO produto VALUES (0, '$nome_produto', '$categoria_produto', '$subCategoria_produto','$tamanho_produto', 
    '$cor_produto', '$quantidade_produto', '$preco_produto', '$imagem_produto')";

    $resultado_insert = mysqli_query($conexao, $insert_produto);

    if($resultado_insert == true) {
        header('location:cadastro-produtoView.php?cadastro_sucesso=1');
      } else {
        header('location:cadastro-produtoView.php?cadastro_sucesso=0');
    }
}
function dadosProduto($conexao){
//Seleciona dados do produto 
    $select_produto = "SELECT * FROM produto";
  
    $resultado_select = mysqli_query($conexao, $select_produto);
        
    return $resultado_select;
  }