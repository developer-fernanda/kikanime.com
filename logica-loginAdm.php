<?php

session_start();

//Ao chamar a função é necessário estabelecer a conexão com o banco 
function logaAdm($conexao){

    // Recuperar dados de login do formulário via POST e realizar uma consulta na tabela de adm para barrar o adm não cadastrado no sistema
    $email_adm = $_POST['txtemail_adm'];
    $senha_adm = $_POST['txtsenha_adm'];

    // Select no banco
    $select_adm = "SELECT * FROM administrador WHERE email_adm = '{$email_adm}' AND senha_adm ='{$senha_adm}'";

    $resultado_adm = @mysqli_query($conexao, $select_adm);

    $retorna_adm = mysqli_fetch_array($resultado_adm);

    //recupera o nome do usuário logado
      if($retorna_adm == null){
        echo " <label class='alert alert-danger'>    
            Dados incorretos, tente novamente!
            </label>";
    }else{
        // Criando sessão de usuario
        $_SESSION["email_adm_logado"] = $email_adm;
         //recupera o nome do usuário logado
         $nome_adm = $retorna_adm['nome_adm'];
        $_SESSION["nome_adm_logado"] = $nome_adm;
        //Verifica e direciona para o painel de produto
        header('location:painel-admView.php');
    }

}

//Após o login estas funções realizam a verificação para que somente o usúario logado tenha acesso ao restante do sistema
function verificaSeAdministradorEstaLogado(){
    if(!isset($_SESSION["email_adm_logado"]) ){
        // Usúario nao esta logado!";
        header("Location:erro-admView.php");
        //Encerra a execução do código
        die();
    }
}

function pegaEmailDoAdministradorLogado(){
    return $_SESSION["email_adm_logado"];
}

function pegaNomeDoAdministradorLogado(){
    return $_SESSION["nome_adm_logado"];
}
  

function logout(){
    session_destroy();
    header("Location: login-admView.php");
}



