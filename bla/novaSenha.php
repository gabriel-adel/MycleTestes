<?php
session_start();
include('conexao.php');

if(empty($_POST['email'] )){
    header('Location: recuperaSenha.php');
}else{
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
}





$query = "SELECT contato.email
from contato as contato join conta as conta join pessoa as p  
where contato.id_pessoa = p.idPessoa and p.id_login = conta.idLogin and contato.email =  '{$email}'";

$conta = mysqli_query($conexao, $query) or die(mysqli_error($conexao));




if(mysqli_num_rows($conta) > 0){
    $_SESSION['email'] = $email;
    header('Location: email.php');
    exit();
}else{
    unset($_SESSION['email']);
    header('Location: formulario.php');
    exit();
}
?>
 


