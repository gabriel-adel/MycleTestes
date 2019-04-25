<?php 
    $header_title = 'produto infantil';
    $header_css = '<link rel="stylesheet" href="css/kimono.css">';
    include('conexao.php');
    include('header.php');
    
    if(!isset($_GET['aikido'])){
        $_GET['aikido'] = null;
        
    }
    if(!isset($_GET['karate'])){
        
        $_GET['karate'] = null;
        
    }
    if(!isset($_GET['infantil'])){
        $_GET['infantil'] = null;
        
    }
    if(!isset($_GET['adulto'])){
        $_GET['adulto'] = null;
    }
    if(!isset($ProdutoTipo)){
        $ProdutoTipo = null;
    }
    if(!isset($ProdutoTipo2)){
        $ProdutoTipo2 = null;
    }
    if(isset($_GET['karate']) && $_GET['karate']){
        $ProdutoTipo = 'karate';
        
    }
    if(isset($_GET['aikido']) && $_GET['aikido']){
        $ProdutoTipo = 'aikido';
        
    }
    
    if(isset($_GET['infantil']) && $_GET['infantil']){
        $ProdutoTipo2 = 'infantil';
        
    } 
    if(isset($_GET['adulto']) && $_GET['adulto'] ){
        $ProdutoTipo2 = 'adulto';
        
    }  
    
    
    $query="SELECT * from produto where tag like  '%$ProdutoTipo%' and tag like '%$ProdutoTipo2%'";

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
                                    <img src="img\produtos/miniatura<?=$produto['idProduto']?>.png" 
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