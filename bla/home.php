<?php
    
    $header_title	=	"Mycle";
    $header_css = '<link rel="stylesheet" href="css/home.css">';
    include("header.php");
    
    include("conexao.php");                               
    
    
    
?>
        <div class="container banner-menuR">
            <section class="banner-destaque">
                <figure>
                    <a href="#"><img src="img/teste.png"></a>
                   
                </figure>

            </section>
            
            <div class="painel">
                <section class="destaque">
                    <nav>
                        <h2>KARATE</h2>
                        <ol>
                            <?php 
                                
                                $produtos = mysqli_query($conexao, "SELECT * FROM produto ");
                                while ($produto	=	mysqli_fetch_array($produtos)):
                            ?>
                                <li>
                                    <a href="produto.php?id=<?=$produto['idProduto']?>">
                                        <figure>
                                            <img src="img\produtos/karate<?= $produto['idProduto']?>-miniatura-branco.png" 
                                            alt="<?= $produto['nomeProduto']?>">
                                            <figcaption><?= $produto['nomeProduto']?></figcaption>
                                            <figcaption>R$ <?= $produto['valorVarejo']?></figcaption>
                                        </figure>
                                    </a>
                                </li>
                            <?php endwhile;?> 
                        </ol>
                    
                        
                </section>
                
                <section class="novidades">
                    <h2>AIKIDO</h2>
                    <ol>
                            <?php 
                                
                                $produtos = mysqli_query($conexao, "SELECT * FROM produto /*limit 10*/");
                                while ($produto	=	mysqli_fetch_array($produtos)):
                            ?>
                                <li>
                                    <a href="produto.php?id=<?= $produto['idProduto']?>">
                                        <figure>
                                            <img src="img\produtos/aikido<?= $produto['idProduto']?>-<?=$produto['cor']?>.png" 
                                            alt="<?= $produto['nomeProduto']?>">
                                            <figcaption><?= $produto['nomeProduto']?></figcaption>
                                            <figcaption>R$ <?= $produto['valorVarejo']?></figcaption>
                                        </figure>
                                    </a>
                                </li>
                            <?php endwhile;?> 
                        </ol>
                    </nav>   
                        
                </section>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/home.js"></script>
    <?php 
        include("footer.php");
        
?>
