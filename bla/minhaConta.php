<?php
    session_start();
    $header_title	=	"Mycle";
    
    
    $header_css = '<link rel="stylesheet" href="css/minhaConta.css">';
    include("header.php");
    include("conexao.php");     
    include('verificaLogin.php');
    $_SESSION['usuario'];                          
    $_SESSION['idPessoa'];
    
    $query ="select conta.idLogin,conta.usuario, p.nome, p.sexo, dp.cpf,dp.dataNascimento,c.email, c.telefone, c.celular, e.estado, e.cidade, e. bairro, e.rua, e.numero, e.cep, e.complemento
    from conta as conta join pessoa as p join dadospessoais as dp join contato as c join endereco as e 
    where p.id_dados_pessoais = dp.idDadosPessoais and p.idPessoa = e.id_pessoa and p.idPessoa = c.id_pessoa and p.id_login = conta.idLogin and conta.usuario = '{$_SESSION['usuario']}'";
    
    
    
    $result = mysqli_query($conexao,$query) or die(mysqli_error($conexao));
    $pessoa = mysqli_fetch_array($result);
        
    
    
?>
     
    
    <div class="container"> 
     <section class="formulario">
                    <form method="POST">
                        <fieldset class="dadosPessoas">
                            <legend>Dados Pessoas</legend>
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" value="<?= $pessoa['nome']?>">
                            <label for="dataNascimento">Idade:</label>
                            <input type="text" name="dataNascimento" value="<?= $pessoa['dataNascimento']?>">
                            <label for="cpf">Cpf:</label>
                            <input type="text" name="cpf" value ="<?= $pessoa['cpf']?>">
                            <label for="sexo">Sexo:</label>
                            <input type="text" name="sexo" value="<?= $pessoa['sexo']?>">
                            <label for="email">E-mail:</label>
                            <input type="text" name="email" value="<?= $pessoa['email']?>">
                            <label for="telefone">Telefone:</label>
                            <input type="text" name="telefone" value="<?= $pessoa['telefone']?>">
                        </fieldset>
                        <fieldset class="endereco">	
                            <legend>Endereço</legend>
                            <label for="cep">Cep:</label>
                            <input type="text" name="cep" value="<?= $pessoa['cep']?>">
                            <label for="estado">Estado:</label>
                            <input type="text" name="estado" value="<?= $pessoa['estado']?>">
                            <label for="cidade">Cidade:</label>
                            <input type="text" name="cidade" value="<?= $pessoa['cidade']?>">
                            <label for="rua">Rua:</label>
                            <input type="text" name="rua" value="<?= $pessoa['rua']?>">
                            <label for="numero">Numero:</label>
                            <input type="text" name="numero" value="<?= $pessoa['numero']?>">
                            <label for="complemento">Complemento:</label>
                            <input type="text" name="complemento" >
                            
                        </fieldset>
                        
                    </form>
                    <button onclick="window.location.href = '#';">editar</button>
                    <button onclick="window.location.href = 'historico.php';">meus pedidos</button>
                    
                </section>
    </div>            
<?php 
    include("footer.php");
        
?>
