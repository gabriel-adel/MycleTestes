<?php
    $header_title	=	"formulario";
    $header_css = '<link rel="stylesheet" href="css/formulario.css">';
    
	include("header.php");
?>


            <div class="container">	
                <section class="formulario">
                    <form action="cadastro.php" method="POST">
                        <fieldset class="dadosPessoas">
                            <label for="usuario">usuario*:</label>
                            <input type="text" name="usuario" id="usuario" required>
                            
                            <label for="senha">Senha*:</label>
                            <input type="password" name="senha" required> 
                            
                            <legend>Dados Pessoas</legend>
                            <label for="nome">Nome*:</label>
                            <input type="text" name="nome" required>

                            <label for="dataNascimento">Idade*:</label>
                            <input type="date" name="dataNascimento" required>

                            <label for="cpf">CPF*:</label>
                            <input type="text" name="cpf" class ="cpf"required>

                            <label for="sexo">Sexo*:<br></label>
                            <input type="radio" name="sexo" value="M" required>
                            <label for="masculino" >masculino</label>
                            <input type="radio" name="sexo" value="F" required>
                            <label for="feminino">feminino<br></label>
                            
                            <label for="email">e-Mail*:</label>
                            <input type="email" name="email" required>
                            
                            
                            <label for="telefone">Telefone:</label>
                            <input type="text" name="telefone" class="telefone">
                            <label for="celular">Celular*:</label>
                            <input type="text" name="celular"  class ="celular"required>
                        </fieldset>
                        <fieldset class="endereco">	
                            <legend>Endereço</legend>
                            <label for="estado">Estado*:</label>
                            <input type="text" name="estado" required>

                            <label for="cidade">Cidade*:</label>
                            <input type="text" name="cidade" required>

                            <label for="bairro">bairro*:</label>
                            <input type="text" name="bairro" required>
                            <label for="rua">Rua*:</label>
                            <input type="text" name="rua" required>

                            <label for="numero">Numero*:</label>
                            <input type="text" name="numero" class="numero"required>

                            <label for="cep">CEP*:</label>
                            <input type="text" name="cep" class="cep"required>
                            
                            <label for="complemento">Complemento:</label>
                            <input type="text" name="complemento">
                            
                        </fieldset>
                        
                        <button class="registrar">Registrar</button>
                    </form>
                    
                </section>
                
                
            </div>
            <script type="text/javascript" src="js/jquery.js"></script>
            
            <script type="text/javascript" src="js/jquery.mask.js"></script>
            <script type="text/javascript" src="js/formulario.js"></script>
           
            
            <?php include("footer.php")?>
 