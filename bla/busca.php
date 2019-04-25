<?php
	$header_title	=	"Produtos MyCle";
	$header_css = '<link rel="stylesheet" href="css/listaDeBusca.css">';
	include('header.php');
	
	include('conexao.php');
	
	if(empty($_POST['busca'])){
		header('Location: home.php');
		exit();
	}else{
		$busca = $_POST['busca'];
	
	}
	
	$query = "SELECT * from produto where tag like '%$busca%'  limit 30";

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
<?php endwhile;
	
?>
<?php include('footer.php')?>