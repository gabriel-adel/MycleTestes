<?php
    session_start();
    $header_title	=	"check out";
    $header_css = '<link rel="stylesheet" href="css/checkout.css">';
    include("header.php");
    include("conexao.php");
    
    if(empty($_POST['tamanho'])){
        $tamanho = null;
    
    }else{
        $tamanho = $_GET['tamanho'];
    
    }
    if(!isset($_SESSION['itens'])){
        $_SESSION['itens'] = array();
    }
    
    if(isset($_GET['add']) && $_GET['add'] == 'carrinho'){
        $idProduto = $_GET['id'];
        if(!isset($_SESSION['itens'][$idProduto])){
            $_SESSION['itens'][$idProduto] =1;
            header("Location: checkout.php");
        }else{
            $_SESSION['itens'][$idProduto] += 1;
            header("Location: checkout.php");
        }
    }    
    
    
    
    
    
?>
        
           
            <?php if(count($_SESSION['itens'])== 0 ){
                
            ?>  
            <div class="semCompra">
                <h1 class = "sem_compra">sem compras voltar para <a href="home.php">home</a></h1>
            </div>
            
            <?php }else{
            
                
                $_SESSION['pedidos'] = array();
                foreach($_SESSION['itens'] as $idProduto => $quantidade){
                    $query ="SELECT * FROM produto  where idProduto = $idProduto";
                    $dados = mysqli_query($conexao,$query);
                    $produto= mysqli_fetch_array($dados);
                    $total = $quantidade * $produto['valorVarejo'];
                    
                    
                    
            ?>
                <div class="produto">
                    <section class="venda">
                            <div	class="col-md-4">
                                    
                                <div	class="card	mb-3">
                                    <div	class="card-header">
                                    
                                    </div>

                                        <div	class="card-body">
                                            
                                            <img src="img\produtos/karate<?= $produto['idProduto']?>-miniatura-branco.png" 
                                            alt="<?= $produto['nomeProduto']?>" class="img-thumbnail	mb-3">
                                            <dl>
                                                
                                                <dt><?=$produto['nomeProduto']?></dt>
                                                <dt>Cor:</dt>
                                                <dd><?=$produto['cor']?></dd>
                                                <dt>Tamanho:</dt>
                                                <dd><?= $tamanho?></dd>
                                                <dt>Preço:</dt>
                                                <dd id="preco"><?=$produto['valorVarejo']?></dd>
                                            </dl>
                                    </div>
                                </div>
                                <div class="quantidadeProduto">
                                    <div class="form-group">
                                        <label for="qtd">Quantidade</label>
                                        <p class="form-control"><?=$quantidade?></p>

                                    </div>
                                    <div class="form-group">
                                        <label for="total">Total</label>
                                        <output	for="qtd	preco" id="total" class="form-control">R$<?=$total?></output>
                                        <a href="remover.php?remover=carrinho&id=<?= $produto['idProduto']?>">remover</a>
                                    </div>
                                </div>    
                                <?php array_push($_SESSION['pedidos'], array('idProduto' => $produto['idProduto'],'quantidade' =>$quantidade, 'total'=>$total, 
                                'valorVarejo' => $produto['valorVarejo']));?>
                            </div>
                    </section>
                
                </div>
            <?php }?>
        <?php }?>
        
        <?php 
            
            if(count($_SESSION['itens'])>= 1){
                
                foreach($_SESSION['pedidos'] as $pedidos ){
                
                        
                    $valorTotal += $pedidos['valorVarejo'] * $pedidos['quantidade'];
                }
                    
                    

                
                
        ?>
        <section>
            <div>
                 
                 
                
                <p>Total:R$<?=$valorTotal?></p>
            </div>
            <div class="compra">
                <form>
                
                                      
                    <a href="comprarRegistra.php">fechar compra</a>
                    
                </form>
                
            </div>
            <?php }?>
        </section>
       

    </body>
    
</html>