<?php
include('conexao.php');

//Essa função pega o IP do usuário 
$ip_provisorio = getHostByName(getHostName());
//Essa variável armazena o nome que eu defini para o cookie
$nome_cookie = "ip_provisorio";

setcookie($nome_cookie, $ip_provisorio);

// Recuperando o IP 
$idClienteCookie = $_COOKIE['ip_provisorio'];
//Recuperando o ID do produto
$id_produto = $_GET['id_produto'];

//O valores são inseridos conforme quantidade de colunas do banco, neste caso, o 0 é utilizado para as colunas que contém ID do cliente que está NULL no banco
$insert_carrinho = "INSERT INTO carrinho VALUES(0, $id_produto, 0, '$idClienteCookie' )";

$resultado = mysqli_query($conexao, $insert_carrinho);

if($resultado == true){
    header('location:carrinhoView.php');
}else{
    echo 'Você ainda não possui nenhum item cadastrado';
}


// function selecionaCarrinho($conexao){
//     $idClienteCookie = $_COOKIE['ip_provisorio'];

//     $select_carrinho = "SELECT * FROM carrinho WHERE cookie_carrinho =  $idClienteCookie";

//     $resultado_select = mysqli_query($conexao, $select_carrinho);

//     return $resultado_select;
    

// }


function valorCarrinho($conexao){
    $idClienteCookie = $_COOKIE['ip_provisorio'];
    $select_totalCarrinho = "SELECT SUM(preco_produto * 1) AS total_carrinho FROM carrinho INNER JOIN produto ON produtos.id_produto = carrinho.id_produto INNER JOIN cliente ON cliente.id_cliente = carrinho.id_cliente WHERE cookie_carrinho =  '$idClienteCookie' ";

    $resultado_total = mysqli_query($conexao, $select_totalCarrinho);
    $total_carrinho = mysqli_fetch_assoc($resultado_total);

    return $total_carrinho;

}
