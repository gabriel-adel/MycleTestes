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

define('HOST', '');
define('USUARIO','');
define('SENHA','');
define('DB','');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Nao connectou');
 

