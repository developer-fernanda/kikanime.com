<?php
session_start();
include('conexao.php');
include('logica-cadastroCliente.php');

// Recuperando o IP 
$idClienteCookie = $_COOKIE['ip_provisorio'];
//Recuperando o ID do produto
$id_produto = $_GET['id_produto'];

$insert_carrinho = "";

if (!isset($_SESSION["email_cliente_logado"])) {

    //O valores são inseridos conforme quantidade de colunas do banco, neste caso, o 0 é utilizado para as colunas que contém ID do cliente que está NULL no banco
    $insert_carrinho = "INSERT INTO carrinho VALUES (0, $id_produto, 0, '$idClienteCookie' )";

} else {
    $cliente = obtemClientePorEmail($conexao);
    $idCliente = $cliente['id_cliente'];
    //O valores são inseridos conforme quantidade de colunas do banco, neste caso, 
    //o 0 é utilizado para as colunas que contém ID do cliente que está NULL no banco
    $insert_carrinho = "INSERT INTO carrinho VALUES(0, $id_produto, $idCliente, null )";
}

$resultado = mysqli_query($conexao, $insert_carrinho);

if ($resultado == true) {
    header('location:carrinhoView.php');
} else {
    echo 'Você ainda não possui nenhum item cadastrado';
}



