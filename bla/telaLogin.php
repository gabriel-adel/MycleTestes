<?php 
    $header_title = 'cadastro';
    $header_css = '<link rel="stylesheet" href="css/telaLogin.css">';
    include('header.php');
    
    
?>
    <?if($_GET['mensagemEncontrada']){
        $mensagem = $_GET['mensagemEncontrada'];
    }?>
    <div class="container-div">
        <section class="login-top">
            <form action="login.php" method="POST">
                <fieldset class="login">
                    <label>usuario</label>
                    <input type="text" name="usuario" required>
                    <label>senha</label>
                    <input type="password" name="senha" required>
                    <button class="enviar" >ENTRAR</button>
                </fieldset>    
            </form>        
        </section>
        <section class="anc">
            <a href="formulario.php">cadastrar</a>
            <a href="recuperarSenha.php">recuperar senha</a>
        </section>
    </div>
        
    
    
    <?php include('footer.php');?>    
 