<?php
session_start();
include('conexao.php');
if(isset($_GET['remover'] ) && $_GET['remover'] == 'carrinho'){
    $idProduto = $_GET['id'];
    unset($_SESSION['itens'][$idProduto]);
    header("Location: checkout.php");
}
?>