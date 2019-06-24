<?php
    $header_title	= 'produto';
    
    $header_css = '<link rel="stylesheet" href="css/produto.css">';
    include("header.php");
    include("conexao.php");
    if(empty($_GET['id'])){
        $_GET['id'] = 1;
    }
    
    $id = $_GET['id'];
    $con = getConection();
    $query="SELECT * from produto where idProduto = $id";
    $stmt = $con -> prepare($query);
    $stmt -> execute();
    $result = $stmt->fetchAll();
    
    foreach($result as $produto):
    
?>
        
        <div>
            <div class="mercadoria">
                <section class="foto-mercadoria">
                    <img src="img/produtos/foto<?=$produto['idProduto']?>.jpg">
                </section>
                <section class="produto">
                    <h1><?=$produto['nomeProduto'] ?></h1>
                    <section class="pagamento">
                        <p><h2>Preço: <?=$produto['valorVarejo']?></h2></p>
                        <form action="checkout.php" method="POST"> 
                        
                            <input type="hidden" name="id" value ="<?=$produto['idProduto'] ?>">
                            
                            <fieldset class="cor">
                            <p>cor:</p>
                            <?= $produto['cor']?>
                            </fieldset>
                            <fieldset class="tamanho">
                                <p>tamanho:</p>
                                <?= $produto['tamanho']?>
                                 
                                <P>ENTRE EM CONTATO:(11) 5641-1569</p>
                            </fieldset>    
                            
                        </form>
                        
                    </section>
                    <section class="desc">
                        <h1>DESCRIÇÂO:</h1>
                        <p>
                            <?=$produto['descProduto']?>
                            
                        </p>
                    </section>
                </section>
            </div>
    <?php endforeach;?>
            <div class="painel">
                <section class="novidades">
                        <h2>novidades</h2>
                        <ol>
                        <?php 
                            
                            $con = getConection();
                            $query="SELECT * from produto limit 0,6";
                            $stmt = $con -> prepare($query);
                            $stmt -> execute();
                            $result = $stmt->fetchAll();
                            foreach($result as $produto):
                        ?>
                        <li>
                            <a href="produto.php?id=<?= $produto['idProduto']?>">
                                    <figure>
                                        <img src="img\produtos/miniatura<?= $produto['idProduto']?>.jpg" 
                                        alt="<?= $produto['nomeProduto']?>">
                                        <figcaption><?= $produto['nomeProduto']?></figcaption>
                                        <figcaption>R$ <?= $produto['valorVarejo']?></figcaption>
                                        </figure>
                                    </a>
                            </li>
                            <?php endforeach;?>  
                    </ol>
                </section>
                <section class="veja-mais">
                        <h2>veja mais</h2>
                        <ol>
                        <?php 
                                
                            $con = getConection();
                            $randon = rand(1,66);
                            $query="SELECT * from produto limit $randon,6";
                            $stmt = $con -> prepare($query);
                            $stmt -> execute();
                            $result = $stmt->fetchAll();
                            foreach($result as $produto):
                            ?>
                                <li>
                                    <a href="produto.php?id=<?= $produto['idProduto']?>">
                                        <figure>
                                            <img src="img\produtos/miniatura<?= $produto['idProduto']?>.jpg" 
                                            alt="<?= $produto['nomeProduto']?>">
                                            <figcaption><?= $produto['nomeProduto']?></figcaption>
                                            <figcaption>R$ <?= $produto['valorVarejo']?></figcaption>
                                        </figure>
                                    </a>
                                </li>
                            <?php endforeach;?>  
                    </ol>
                </section>
            </div>
        </div>
     
        <?php include("footer.php")?>

        
        
    
    <script	type="text/javascript" src="js/produto.js"></script>



