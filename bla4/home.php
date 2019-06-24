<?php
    
    $header_title	=	"Mycle";
    $header_css = '<link rel="stylesheet" href="css/home.css">';
    include("header.php");
    
    include("conexao.php");                               
    
    

    
?>
        <div class="container banner-menuR">
            <section class="banner-destaque">
                <div class="slider">
                    <img src="img/teste.png" alt="foto banner">
                    <img src="img/teste1.png" alt="foto banner">
                    <img src="img/teste2.png" alt="foto banner">
                </div>   
                

            </section>
            
            <div class="painel">
                <section class="destaque">
                    <nav>
                        <h2>KARATE</h2>
                        <ol>
                            <?php 
                                 $con = getConection();
                                 $query="SELECT * from produto where tag like '%karate%'";
                                 $stmt = $con -> prepare($query);
                                 $stmt -> execute();
                                 $result = $stmt->fetchAll();
                                 foreach($result as $produto):
                            ?>
                                <li>
                                    <a href="produto.php?id=<?=$produto['idProduto']?>">
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
                
                <section class="novidades">
                    <h2>AIKIDO</h2>
                    <ol>
                            <?php 
                                $con = getConection();
                                $query="SELECT * from produto where tag like '%aikido%'";
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
                    </nav>   
                        
                </section>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>
        <script type="text/javascript" src="js/home.js"></script>
    <?php 
        include("footer.php");
        
?>
