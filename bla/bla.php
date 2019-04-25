<?php
    
    $header_title	=	"bla teste";
    
    
    include("conexao.php");                               
    
    
    

    /*$query ="SELECT * from teste";
    $teste = mysqli_query($conexao,$query);
    
    while ($teste1 = mysqli_fetch_array($teste)){
       foreach($teste1 as $bla){
           echo $bla['teste'];
       }

    }

    */
    for($i=0; $i<10;$i++){
        $query = "alter table teste add column teste$i int";
        $exec = mysqli_query($conexao,$query);
    
    }
        
    
    
        
?>
