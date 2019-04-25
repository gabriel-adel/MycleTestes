<?php
    session_start();
    include('header.php');
    include('conexao.php');
    
    if(!isset($_SESSION['email'])){
        $_SESSION['email'] = null;
    }else {
        $email = $_SESSION['email'];
        
    }
    $query = "SELECT contato.email,conta.senha 
    from contato as contato join conta as conta join pessoa as p  
    where contato.id_pessoa = p.idPessoa and p.id_login = conta.idLogin and contato.email =  '{$email}'";
    $chave = mysqli_query($conexao, $query) or die(mysqli_error($conexao));
    $chaveDeAcesso=mysqli_fetch_array($chave);


    $_SESSION['chaveDeAcesso'] = array();
    $chaveAcesso = sha1($chaveDeAcesso['email'].$chaveDeAcesso['senha']);
    
    array_push($_SESSION['chaveDeAcesso'], array('chaveAcesso' => $chaveAcesso));



    $assunto = "Redefinir Senha";
    $corpo = "
        Assunto: " .$assunto."
        email: " .$email."
        mesagem: ".$chaveAcesso."
    ";
    mail($email,$assunto,$corpo,'From: gabriel_adelar@hotmail.com');
    echo 'foi';

?>

<h1 class= "senha">conta achada, verifique seu email</h1>

