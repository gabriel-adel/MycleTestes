<?php
    session_start();
    
    
    $header_title	=	"Mycle";
    
    $header_css = '<link rel="stylesheet" href="css/checkout.css">';
    include('header.php');
    include('verificaLogin.php');
    include('conexao.php');
    include('verificaCompra.php');
    $_SESSION['email'];
    $_SESSION['itens'];
    
    $query = "SELECT  e.estado, e.cidade, e.bairro, e.rua, e.numero, e.cep, e.complemento
    from pessoa as p join dados_pessoais as dp join endereco as e on p.idDados = dp.idDados and p.idEndereco = e.idEndereco where email ='{$_SESSION['email']}'";
    
    $result = mysqli_query($conexao,$query) or die(mysqli_error($conexao));
    $pessoa = mysqli_fetch_array($result);
?>
<div class="produtos">
<?= 
    $query ="SELECT * FROM produto join cor on cor.idCor = produto.idCor where idProduto = $idProduto";
    $dados = mysqli_query($conexao,$query);
    $produto= mysqli_fetch_array($dados);
    $total = $quantidade * $produto['valor_varejo'];
    
?>
            <div class="produto">
                <section class="venda">
                        <div	class="col-md-4">
                                
                            <div	class="card	mb-3">
                                <div	class="card-header">
                                
                                </div>

                                    <div	class="card-body">
                                        <img	src="img/produtos/karate<?=$produto['idProduto']?>-<?=$produto['cor']?>.png" alt="Fuzzy	Cardigan" class="img-thumbnail	mb-3">

                                        <dl>
                                            
                                            <dt><?=$produto['nome_produto']?></dt>
                                            <dt>Cor:</dt>
                                            <dd><?=$produto['cor']?></dd>
                                            <dt>Tamanho:</dt>
                                            <dd><?=$_POST['tamanho']?></dd>
                                            <dt>Preço:</dt>
                                            <dd id="preco"><?=$produto['valor_varejo']?></dd>
                                        </dl>
                                </div>
                            </div>
                            <div class="quantidadeProduto">
                                <div class="form-group">
                                    <label for="qtd">Quantidade</label>
                                    <input type="number" id="qtd" min="1" max="99" value="<?=$quantidade?>" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label for="total">Total</label>
                                    
                                    <output	for="qtd	preco" id="total" class="form-control"><?=$total?></output>
                                </div>
                            </div>    
                        </div>
                </section>
            
            </div>

</div>
<div class="endereco">
<form>
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
                            
</form>
<div class="forma-pagamento">

</div>
</div>    
<?= include('footer.php');?>