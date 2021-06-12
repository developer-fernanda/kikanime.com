<?php 
 
//FUNÇÃO COMBOX
function listaProduto($conexao){
     $lista_produto = array();
     $select_resultado =  'SELECT * FROM produto order by nome_produto';
     $resultado_select = mysqli_query($conexao, $select_resultado);
     while($recebe_produto = mysqli_fetch_assoc($resultado_select)){
         array_push($lista_produto, $recebe_produto);
     } 
    //Variavél que contém o array
    return $lista_produto;
}

//Variavél que recebe o método completo 
$listaProduto = listaProduto($conexao);

$dado = selecionaProduto($conexao);

?>

<!--FUNÇÃO COMBOX-->
<?php foreach ($listaProduto as $produto){ ?> 
    <option value='<?php echo $produto['id_produto']?>'><?php echo $produto['categoria_produto']?> </option>
<?php } ?>


rgb fundo git claro
#0A2145

rgb fundo git escuro
#040D21

cor do titulo git
#96EBD8
