<?php

/*





function getConection(){
  
  $host = '127.0.0.1';
  $usuario = 'root';
  $senha= '';
  $db = 'mycle';
    try{
      $conn = new PDO("mysql:host=$host;dbname=$db",$usuario,$senha);
  
  }catch(PDOException $ex){
      echo $ex -> getMessage();
  }
   

}

*/



/** 
 * 
 * @return \PDO
*/

define('HOST', 'mcleyserver2.c4ejixel4uwx.us-east-2.rds.amazonaws.com');
define('USUARIO','adel');
define('SENHA','gabriel87');
define('DB','mycleOficial');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Nao connectou');
 

