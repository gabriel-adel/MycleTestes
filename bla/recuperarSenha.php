<?php 


$header_title = 'Recuperar Senha';
$header_css = '<link rel="stylesheet" href="css/recuperarSenha.css">';
include('conexao.php');
include('header.php');?>


<h1 class="titulo">recuperar senha</h1>
<form method="POST" action="novaSenha.php ">
    <label>e-Mail</label>
    <input type="email" name="email" required>
    <button class="botao">recuperar senha</button>
</form>

<?php include('footer.php');?>