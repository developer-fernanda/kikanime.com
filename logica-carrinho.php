<?php
include('conexao.php');

// Recuperando o IP 
$idClienteCookie = $_COOKIE['ip_provisorio'];
//Recuperando o ID do produto
$id_produto = $_GET['id_produto'];

//O valores são inseridos conforme quantidade de colunas do banco, neste caso, o 0 é utilizado para as colunas que contém ID do cliente que está NULL no banco
$insert_carrinho = "INSERT INTO carrinho VALUES(0, $id_produto, 0, '$idClienteCookie' )";

$resultado = mysqli_query($conexao, $insert_carrinho);

if ($resultado == true) {
    header('location:indexView.php');
} else {
    echo 'Você ainda não possui nenhum item cadastrado';
}


