<?php

/*
define('HOST', 'mcleyserver2.c4ejixel4uwx.us-east-2.rds.amazonaws.com');
define('USUARIO','adel');
define('SENHA','gabriel87');
define('DB','mycleOficial');
define('CHARSET','utf8');
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Nao connectou');






}

*/



/** 
 * 
 * @return \PDO
*/
function getConection(){
  $dns = 'mysql:host=mcleyserver2.c4ejixel4uwx.us-east-2.rds.amazonaws.com;dbname=mycleOficial;charset=utf8';
  
  $usuario = 'adel';
  $senha= 'gabriel87';
  
    try{
      $pdo = new PDO($dns,$usuario,$senha);
      return $pdo;
  }catch(PDOException $ex){
      print $ex;
  }
}   

 

