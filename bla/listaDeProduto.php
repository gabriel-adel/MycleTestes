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
                            $dados = mysqli_query($conexao, "SELECT * FROM produto");
                            while ($produto	=	mysqli_fetch_array($dados)):
                        ?>
                        <li>
                            <a href="produto.php?id=<?= $produto['id']?>">
                                <figure>
                                    <img src="img\produtos/miniatura<?= $produto['idProduto']?>.png" 
                                        alt="<?= $produto['nomeProduto']?>">
                                    <figcaption><?= $produto['nomeProduto']?> por R$ <?= $produto['valorVarejo']?></figcaption>
                                </figure>
                            </a>
                        </li>
                        <?php endwhile;?> 
                    </ol>
                </nav>
            </section>
            
        </div>
        <?php include("footer.php")?>
    
