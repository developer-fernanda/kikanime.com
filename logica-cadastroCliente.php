<?php

function cadastraCliente($conexao) {
    $nome = $_POST['txtnome_cliente'];
    $email = $_POST['txtemail_cliente'];
    $senha = $_POST['txtsenha_cliente'];
    
    $insert_cliente = "INSERT INTO cliente VALUES ('0', '$nome', '$email', '$senha')";

    $resultado = mysqli_query($conexao, $insert_cliente);

    if($resultado == true) {
        echo " <div class='alert-danger'> <label class='alert '>    
                Cadastrado com sucesso!
                </label></div>";
    } else {
        echo "<label class='alert alert-danger'>    
                Erro, tente Novamente!
                </label>";
    }
}
