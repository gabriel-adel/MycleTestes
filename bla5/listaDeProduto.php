<?php
    
    $header_title	=	"Produtos MyCle";
    $header_css = '<link rel="stylesheet" href="css/listaDeProdutos.css">';
    include("header.php");
    include("conexao.php");
?>
        <div class="container">
            
            <section class="produtos">
                <nav>
                    <ol>
                        <?php 
                            $con = getConection();
                            $query="SELECT * from produto";
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
                                        <figcaption>
                                    <?= $produto['nomeProduto']?>
                                </figcaption>
                            	<figcaption>
                                     R$ <?= $produto['valorVarejo']?>
                                </figcaption>
                                </figure>
                            </a>
                        </li>
                        <?php endforeach;?> 
                    </ol>
                </nav>
            </section>
            
        </div>
        <?php include("footer.php")?>
    
