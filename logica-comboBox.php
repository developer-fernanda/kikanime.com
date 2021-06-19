<?php 

//FUNÇÃO COMBOX CATEGORIA 
function listaCategoria($conexao){
     $lista_categoria = array();
     $select_resultado =  'SELECT * FROM categoria order by nome_categoria';
     $resultado_select = mysqli_query($conexao, $select_resultado);
     while($recebe_categoria = mysqli_fetch_assoc($resultado_select)){
         array_push($lista_categoria, $recebe_categoria);
     } 
    //Variavél que contém o array
    return $lista_categoria;
}

 
//FUNÇÃO COMBOX TAMANHO
function listaTamanho($conexao){
    $lista_tamanho = array();
    $select_resultado = 'SELECT * FROM tamanho';
    $resultado_select = mysqli_query($conexao, $select_resultado);
   while($recebe_tamanho = mysqli_fetch_array($resultado_select)){
       array_push($lista_tamanho, $recebe_tamanho);
   }
    //Variavél que contém o array
    return $lista_tamanho;
}

// FUNÇÃO COMBOBOX COR
function listaCor($conexao){
    $lista_cor = array();
    $select_resultado = 'SELECT * FROM cor';
    $select_resultado = mysqli_query($conexao, $select_resultado);
    while($recebe_cor = mysqli_fetch_array($select_resultado)){
        array_push($lista_cor, $recebe_cor);
    }
    //Variável que contém o array
    return $lista_cor;
}

 











?>




