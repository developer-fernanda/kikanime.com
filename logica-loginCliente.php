<?php

session_start();

//Ao chamar a função é necessário estabelecer a conexão com o banco 
function logacliente($conexao)
{

    // Recuperar dados de login do formulário via POST e realizar uma consulta na tabela de cliente para barrar o cliente não cadastrado no sistema
    $email_cliente = $_POST['txtemail_cliente'];
    $senha_cliente = $_POST['txtsenha_cliente'];

    // Select no banco
    $select_cliente = "SELECT * FROM cliente WHERE email_cliente = '{$email_cliente}' AND senha_cliente ='{$senha_cliente}'";

    $resultado_cliente = @mysqli_query($conexao, $select_cliente);

    $retorna_cliente = mysqli_fetch_array($resultado_cliente);


    //recupera o e-mail do cliente logado
    if ($retorna_cliente == null) {
        echo " <label class='alert alert-danger'>    
        Dados incorretos, tente novamente!
        </label>";
    } else {
        // Criando sessão de cliente
        $_SESSION["email_cliente_logado"] = $email_cliente;
        //recupera o nome do cliente logado
        $nome_cliente = $retorna_cliente['nome_cliente'];
        $_SESSION["nome_cliente_logado"] = $nome_cliente;
        //Verifica e direciona para o painel de produto
?>
        <script>
            window.location.href = "indexView.php";
        </script>
<?php
        // echo " <label class='alert alert-danger'>    
        // Usuário Logado com sucesso!
        // </label>";
    }
}

//Após o login estas funções realizam a verificação para que somente o usúario logado tenha acesso ao restante do sistema
function verificaSeClienteEstaLogado()
{
    if (!isset($_SESSION["email_cliente_logado"])) {
        // Usúario nao esta logado!";
        header("Location:erro-clienteView.php");
        //Encerra a execução do código
        die();
    }
}

function pegaEmailDoclienteLogado()
{
    return $_SESSION["email_cliente_logado"];
}

function pegaNomeDoClienteLogado()
{
    return $_SESSION["nome_cliente_logado"];
}


function logout()
{
    session_destroy();
    header("Location: login-clienteView.php");
}

?>