<?php

include ('conexao.php');
include ('logica-loginCliente.php');


//Recupera os dados do cliente logado
// $nome = pegaNomeDoClienteLogado();

// $select_cliente = "SELECT * FROM cliente WHERE nome_cliente = '$nome'";

// $lista_cliente = mysqli_query($conexao, $select_cliente);

// $dados_cliente = mysqli_fetch_array($lista_cliente);

// $id_cliente = $dados_cliente['id_cliente'];

//Deleta dados do cliente

$id_carrinho = $_GET['id_carrinho'];

$idClienteCookie = $_COOKIE['ip_provisorio'];

$delete_carrinho = "DELETE FROM carrinho WHERE id_carrinho = '$id_carrinho'";

$resultado = mysqli_query($conexao, $delete_carrinho);

header('location:carrinhoView.php');