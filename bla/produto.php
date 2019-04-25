<?php
    $header_title	= 'produto';
    
    $header_css = '<link rel="stylesheet" href="css/produto.css">';
    include("header.php");
    include("conexao.php");
    if(empty($_GET['id'])){
        $_GET['id'] = 1;
    }
    
    $id = $_GET['id'];
    $query = "SELECT * from produto where idProduto = $id";
    $dados = mysqli_query($conexao,$query);
    $produto= mysqli_fetch_array($dados);
    
    
    
?>
        
        <div>
            <div class="mercadoria">
                <section class="foto-mercadoria">
                    <img src="img/produtos/karate<?=$produto['idProduto']?>-produto-<?=$produto['cor']?>.png">
                </section>
                <section class="produto">
                    <h1><?=$produto['nomeProduto'] ?></h1>
                    <section class="pagamento">
                        <p><h2>Preço: <?=$produto['valorVarejo']?></h2></p>
                        <form action="checkout.php" method="POST"> 
                        
                            <input type="hidden" name="id" value ="<?=$produto['idProduto'] ?>">
                            
                            <fieldset class="cor">
                            <p>escolha cor:</p>
                            <select>
                                <option><?=$produto['cor']?></option>
                            </select>
                            </fieldset>
                            <fieldset class="tamanho">
                                <legend>escolha o tamanho:</legend>
                                <input type="range" min="<?=$produto['tamanhoMinimo']?>" max="<?=$produto['tamanhoMaximo']?>" value="valorTamanho" step="2" name="tamanho" id="tamanho">
                                <output for="tamanho" name="valorTamanho" value="valorTamanho"><?=$produto['tamanhoMaximo']?></output> 
                                <input type="hidden" name="tamanho" value ="valorTamanho" >
                                
                                
                            </fieldset>
                                <a href="checkout.php?add=carrinho&id=<?= $produto['idProduto']?>" class="comprar">comprar</a>
                        </form>
                        
                    </section>
                    <section class="desc">
                        <p>
                            <?=$produto['descProduto']?>
                        </p>
                    </section>
                </section>
            </div>
            <div class="painel">
                <section class="novidades">
                        <h2>novidades</h2>
                        <ol>
                        <?php 
                            $produtos = mysqli_query($conexao, "SELECT * FROM produto limit 0,6");
                            while ($produto =   mysqli_fetch_array($produtos)):
                        ?>
                        <li>
                            <a href="produto.php?id=<?= $produto['idProduto']?>">
                                    <figure>
                                        <img src="img\produtos/miniatura<?= $produto['idProduto']?>.png" 
                                        alt="<?= $produto['nomeProduto']?>">
                                        <figcaption><?= $produto['nomeProduto']?></figcaption>
                                        <figcaption>R$ <?= $produto['valorVarejo']?></figcaption>
                                        </figure>
                                    </a>
                            </li>
                        <?php endwhile;?>  
                    </ol>
                </section>
                <section class="veja-mais">
                        <h2>veja mais</h2>
                        <ol>
                        <?php 
                                
                                $produtos = mysqli_query($conexao, "SELECT * FROM produto where tag = '%aikido%' ");
                                while ($produto =   mysqli_fetch_array($produtos)):
                            ?>
                                <li>
                                    <a href="produto.php?id=<?= $produto['idProduto']?>">
                                        <figure>
                                            <img src="img\produtos/miniatura<?= $produto['idProduto']?>.png" 
                                            alt="<?= $produto['nomeProduto']?>">
                                            <figcaption><?= $produto['nomeProduto']?></figcaption>
                                            <figcaption>R$ <?= $produto['valorVarejo']?></figcaption>
                                        </figure>
                                    </a>
                                </li>
                            <?php endwhile;?>  
                    </ol>
                </section>
            </div>
        </div>
     
        <?php include("footer.php")?>

        
        
    
    <script	type="text/javascript" src="js/produto.js"></script>



