<?php 
    include('conexao.php');
    session_start();
    
    
     
    if(empty($_POST['usuario'] || $_POST['senha'])){
        header('Location: telaLogin.php');
    }else{
        $usuario = mysqli_real_escape_string($conexao,$_POST['usuario']);
        $senha= mysqli_real_escape_string($conexao,$_POST['senha']);
    }
    
    
    
    
    
    $query = "SELECT c.usuario,p.idPessoa from conta as c join pessoa as p where p.id_login = c.idLogin and usuario='{$usuario}' and senha=md5('{$senha}')";
    $conta = mysqli_query($conexao, $query) or die(mysqli_error($conexao));
    $pessoa = mysqli_fetch_array($conta);
    
  
    
    if(mysqli_num_rows($conta) > 0){
        $_SESSION['usuario'] = $usuario;
        $_SESSION['idPessoa'] = $pessoa['idPessoa'];
        
        header('Location: minhaConta.php');
        
        exit();
    }else{
        unset($_SESSION['usuario']);
        unset($_SESSION['idPessoa']);
        header('Location: telaLogin.php');
        exit();
    }
    
    

?>

