<?php 
session_start();
$header_title	=	"historico de compras";
$header_css = '<link rel="stylesheet" href="css/historico.css">';
include('header.php');
include('conexao.php');
include('verificaLogin.php');
$idPessoa=$_SESSION['idPessoa'];
?>
<h1 class="titulo">historico de compras</h1>
<?php 
    $query = "SELECT prod.idProduto,pedido.dataCompra, pedido.valorTotal, pedido.quantidade,prod.nomeProduto 
    from pedidos as pedido join pessoa as p join produto as prod 
    where pedido.id_pessoa = p.idPessoa and pedido.id_produto = prod.idProduto and pedido.id_pessoa = '{$idPessoa}' ;";
    $dados =mysqli_query($conexao, $query);
    while($pedidos = mysqli_fetch_array($dados)):
?> 

<div clas="pedidos">
    <nav class="compras">
        <ol class="listaProdutos">
            <li><a href="produto.php?id=<?=$pedidos['idProduto']?>">Produto:<?= $pedidos['nomeProduto']?></a></li>
            <li>valor:<?= $pedidos['valorTotal']?></li>
            <li>quantidade:<?= $pedidos['quantidade']?></li>
            <li>data da compra:<?= $pedidos['dataCompra']?></li>
        </ol>
    </nav>
</div>

<?php endwhile;?>




