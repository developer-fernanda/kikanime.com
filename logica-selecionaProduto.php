<?php

function selecionaProduto($conexao){
//RECUPERANDO O ID DO PRODUTO
$id_produto = $_GET['id_produto'];

$select_produto = "SELECT * FROM PRODUTO WHERE id_produto = '$id_produto'";

$resultado_select = mysqli_query($conexao, $select_produto);

$recebe_select =  mysqli_fetch_array($resultado_select);

return $recebe_select;
}

