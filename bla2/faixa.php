<?php 
    $header_title = 'produto infantil';
    $header_css = '<link rel="stylesheet" href="css/faixa.css">';
    include('conexao.php');
    include('header.php');
    
    
    
    
    $query="SELECT * from produto where tag like  '%faixa%' ";

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
                                    <img src="img\produtos/faixa-miniatura<?=$produto['idProduto']?>.png" 
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