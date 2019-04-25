<?php
    session_start();
    include('verificaLogin.php');
    include('conexao.php');
    include('verificaCompra.php');
    
    
    

    
                
        $idPessoa=$_SESSION['idPessoa'];
        
        foreach($_SESSION['pedidos'] as $pedidos ){
            $idProduto= $pedidos['idProduto'];
            $quantidade= $pedidos['quantidade'];
            $total= $pedidos['total'];
            $query ="INSERT into pedidos(id_produto,valorTotal,quantidade,id_pessoa,dataCompra) value ('$idProduto', '$total','$quantidade','$idPessoa',now())";
            $compra = mysqli_query($conexao,$query) or die(mysqli_error($conexao));
                        
                        
                        
                        
        }
                    
                        
    ?>
                    
                  