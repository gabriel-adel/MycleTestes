<?php 
    include('conexao.php');

	$nome = filter_input(INPUT_POST,'nome_produto',FILTER_SANITIZE_STRING);
    $valor_varejo = filter_input(INPUT_POST,'valor_varejo',FILTER_SANITIZE_STRING);
    $valor_atacado = filter_input(INPUT_POST,'valor_atacado',FILTER_SANITIZE_STRING);
    $desc_produto = filter_input(INPUT_POST,'desc_produto',FILTER_SANITIZE_STRING);
    
    $codigo_produto = filter_input(INPUT_POST,'codigo_produto',FILTER_SANITIZE_STRING);
    $data_publicacao = filter_input(INPUT_POST,'data_publicacao',FILTER_SANITIZE_STRING);
    $tamanho_minimo = filter_input(INPUT_POST,'tamanho_minimo',FILTER_SANITIZE_STRING);
    $tamanho_maximo = filter_input(INPUT_POST,'tamanho_maximo',FILTER_SANITIZE_STRING);
	$teg = filter_input(INPUT_POST,'teg',FILTER_SANITIZE_STRING);
    $idCor = filter_input(INPUT_POST,'idCor',FILTER_SANITIZE_STRING);
    
    $produto = "INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) value 
    ('$nome','$idCor','$valor_atacado','$valor_varejo','$desc_produto','$codigo_produto',now(),'$tamanho_minimo','$tamanho_maximo','$teg')";
    $result = mysqli_query($conexao, $produto);
    
    ?>
{ 