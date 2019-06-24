<?php 
    $header_title = 'produto infantil';
    $header_css = '<link rel="stylesheet" href="css/faixa.css">';
    include('conexao.php');
    include('header.php');
    
    
    
    $con = getConection();
    $query="SELECT * from produto where tag like  '%faixa%'";
    $stmt = $con -> prepare($query);
    $stmt -> execute();
    $result = $stmt->fetchAll();
    
    foreach($result as $produto):
?>
    <div class="container">
		<section class="produtos">
            <nav>
                <ol>
                    <li>
                        <a href="produto.php?id=<?=$produto['idProduto']?>">
                            <figure>
                                    <img src="img\produtos/miniatura<?=$produto['idProduto']?>.jpg" 
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
<?php endforeach?>

<?php include('footer.php')?>