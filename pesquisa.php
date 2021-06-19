<?php

include("conexao.php");
$consulta = "SELECT * FROM produto ORDER BY nome_produto";

//Verifica se o formulário foi submetido
if (isset($_GET['txtpesquisa'])) {
    $pesquisa = $_GET['txtpesquisa'];
    $consulta = "SELECT * FROM produto WHERE nome_produto LIKE '%$pesquisa%' ORDER BY nome_produto";
}

// echo $consulta;
$con = @mysqli_query($conexao, $consulta) or die($mysql->error);
// var_dump($con->fetch_array());
// exit;
?>