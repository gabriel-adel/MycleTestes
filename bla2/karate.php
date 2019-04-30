<?php 
    $header_title = 'produto infantil';
    $header_css = '<link rel="stylesheet" href="css/produtos.css">';
    include('conexao.php');
    include('header.php');
    
    
    
    
    $query="SELECT * from produto where tag like  '%karate%'";

    $result = mysqli_query($conexao, $query);

    
    while($produto = mysqli_fetch_array($result)):
?>
    <div class="container">
		<section class="produtos">
            <nav>
                <ol>
                    <li>
                        <a href="produto.php?id=<?=$produto['idProduto']?>">
                            <figure>
                                    <img src="img\produtos/karate<?=$produto['idProduto']?>-miniatura-branco.jpg" 
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
                </ol>
            </nav>
        </section>
    </div>       
<?php endwhile?>

<?php include('footer.php')?>