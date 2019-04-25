<?php
    include('conexao.php');
    
    $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
    $dataNascimento = filter_input(INPUT_POST,'dataNascimento',FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_STRING);
    $sexo = $_POST['sexo'];
    
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
    $usuario = filter_input(INPUT_POST,'usuario',FILTER_SANITIZE_STRING);
    $celular = filter_input(INPUT_POST,'celular',FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);
    
    $peso = filter_input(INPUT_POST,'peso',FILTER_SANITIZE_STRING);
    $altura = filter_input(INPUT_POST,'altura',FILTER_SANITIZE_STRING);
    $estado = filter_input(INPUT_POST,'estado',FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST,'cidade',FILTER_SANITIZE_STRING);
    $bairro = filter_input(INPUT_POST,'bairro',FILTER_SANITIZE_STRING);
    $cep = filter_input(INPUT_POST,'cep',FILTER_SANITIZE_STRING);
    $rua = filter_input(INPUT_POST,'rua',FILTER_SANITIZE_STRING);
    $numero = filter_input(INPUT_POST,'numero',FILTER_SANITIZE_STRING);
    $complemento = filter_input(INPUT_POST,'complemento',FILTER_SANITIZE_STRING);
    

    $login = "INSERT into conta(usuario, senha) value ('$usuario',md5('$senha'))";
    $resultado2= mysqli_query($conexao, $login)or die(mysqli_error($conexao));
    $idLogin= mysqli_insert_id($conexao); 
    
    $dados="INSERT INTO dadospessoais(cpf,dataNascimento) value('$cpf','$dataNascimento')";
    $resultado2= mysqli_query($conexao, $dados)or die(mysqli_error($conexao));
    $idDados= mysqli_insert_id($conexao);

    $pessoa="INSERT INTO pessoa(nome,dataCadastro,sexo,id_login,id_dados_pessoais) value('$nome',now(),'$sexo','$idLogin','$idDados')";
    $resultado= mysqli_query($conexao, $pessoa)or die(mysqli_error($conexao));
    $idPessoa= mysqli_insert_id($conexao);

    
    
    $contato = "INSERT into contato(email,telefone,celular,id_pessoa) value('$email','$telefone','$celular','$idPessoa')";
    $resultado2= mysqli_query($conexao, $contato)or die(mysqli_error($conexao));
    
    $endereco = "INSERT into endereco(estado,cidade,bairro,rua,numero,cep,id_pessoa,complemento) value('$estado','$cidade','$bairro','$rua','$numero','$cep','$idPessoa','$complemento')";
    $resultado2= mysqli_query($conexao, $endereco)or die(mysqli_error($conexao));
    
    
    
    header('Location: telaLogin.php');
?>