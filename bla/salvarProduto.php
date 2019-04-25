<?php 
    include('conexao.php');

	$nome = filter_input(INPUT_POST,'nome_produto',FILTER_SANITIZE_STRING);
    $valor_varejo = filter_input(INPUT_POST,'valor_varejo',FILTER_SANITIZE_STRING);
    $valor_atacado = filter_input(INPUT_POST,'valor_atacado',FILTER_SANITIZE_STRING);
    $desc_produto = filter_input(INPUT_POST,'desc_produto',FILTER_SANITIZE_STRING);
    
    $codigo_produto = filter_input(INPUT_POST,'codigo_produto',FILTER_SANITIZE_STRING);
    $data_publicacao = filter_input(INPUT_POST,'data_publicacao',FILTER_SANITIZE_STRING);
    $tamanho_minimo = filter_input(INPUT_POST,'tamanho_minimo',FILTER_SANITIZE_STRING);
    $tamanho_maximo = filter_input(INPUT_POST,'tamanho_maximo',FILTER_SANITIZE_STRING);
	$teg = filter_input(INPUT_POST,'teg',FILTER_SANITIZE_STRING);
    $idCor = filter_input(INPUT_POST,'idCor',FILTER_SANITIZE_STRING);
    
    $produto = "INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) value 
    ('$nome','$idCor','$valor_atacado','$valor_varejo','$desc_produto','$codigo_produto',now(),'$tamanho_minimo','$tamanho_maximo','$teg')";
    $result = mysqli_query($conexao, $produto);
    
    ?>
{ karate
INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI Básico   Mirim',1,'70,00','89,9','Básico  100% algodão  ','KBM',now(),2,8,'mirin kimono karate basico algodao infantil');
INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI Básico   Infantil',1,'90,','115,6','Básico  100% algodão  ','KB1',now(),10,40,'infantil kimono karate basico algodao ');
INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI Básico   Adulto',1,'105,0','134,9','Básico  100% algodão  ','KB2',now(),42,48,'adulto kimono karate basico algodao');
INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI Básico   Adulto extra',1,'120,0','154,2','Básico  100% algodão  ','KB3',now(),50,56,'adulto extra kimono karate basico algodao');

INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI MaxiPro  Mirim',1,'90,0','115,6','MaxiPro PA 67%algod 33%poliest. ','MPKM',now(),2,8,'mirin kimono karate maxi pro algodao poliester infantil');
INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI MaxiPro   Infantil',1,'115,0','147,7','MaxiPro PA 67%algod 33%poliest.','MPK1',now(),10,40,'infantil  kimono karate maxi pro algodao poliester ');
INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI MaxiPro   Adulto',1,'135,0','173,4','MaxiPro PA 67%algod 33%poliest.','MPK2',now(),42,48,'adulto kimono karate maxi pro algodao poliester');
INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI MaxiPro   Adulto extra',1,'160,0','205,5','MaxiPro PA 67%algod 33%poliest.','MPK3',now(),50,56,'adulto extra kimono karate maxi pro algodao poliester');


INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI MaxiPro  Mirim',2,'100,0','128,5','MaxiPro  Preto - (Kobudo) ','KBDM',now(),2,8,'mirin kimono karate maxi pro preto infantil');
INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI MaxiPro   Infantil',2,'125,0','160,6','MaxiPro  Preto - (Kobudo)','KBD1',now(),10,40,'infantil kimono karate maxi pro preto infantil');
INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI MaxiPro   Adulto',2,'150,0','192,7','MaxiPro  Preto - (Kobudo)','KBD2',now(),42,48,'adullto kimono karate maxi pro preto');
INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI MaxiPro   Adulto extra',2,'185,0','237,7','MaxiPro  Preto - (Kobudo)','KBD3',now(),50,56,'adulto extra kimono karate maxi pro preto');

INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI MaxiPro  Mirim',1,'110,0','141,3','Europa liso e ou canelado (Lona PA 50%alg.50%poliest)  ','EPAM',now(),2,8,'mirin kimono europa canelado branco karate infantil');
INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI MaxiPro   Infantil',1,'135,0','173,4','Europa liso e ou canelado (Lona PA 50%alg.50%poliest) ','EPA1',now(),10,40,'infantil kimono europa canelado branco karate ');
INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI MaxiPro   Adulto',1,'165,0','212,0','Europa liso e ou canelado (Lona PA 50%alg.50%poliest) ','EPA2',now(),42,48,'adulto kimono europa canelado branco karate');
INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI MaxiPro   Adulto extra',1,'190,0','244,1','Europa liso e ou canelado (Lona PA 50%alg.50%poliest) ','EPA3',now(),50,56,'adulto extra kimono europa canelado branco karate');

INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI MaxiPro  Mirim',1,'85,0','109,2','OlimpicStar (PAestrela Branco - 50%algod. 50%poliester) ','OPSM',now(),2,8,'mirin kimono olimpc star  branco karate infantil');
INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI MaxiPro   Infantil',1,'105,0','134,9','OlimpicStar (PAestrela Branco - 50%algod. 50%poliester)','OPS1',now(),10,40,'infantil kimono olimpc star  branco karate ');
INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI MaxiPro   Adulto',1,'125,0','160,6','OlimpicStar (PAestrela Branco - 50%algod. 50%poliester)','OPS2',now(),42,48,'adulto kimono olimpc star  branco karate');
INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI MaxiPro   Adulto extra',1,'145,0','186,3','OlimpicStar (PAestrela Branco - 50%algod. 50%poliester)','OPS3',now(),50,56,'adulto extra kimono olimpc star  branco karate');

INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI MaxiPro  Mirim',1,'168,0','215,8','FIGHT  - indicado para KATA -100% algodão ','OPCM',now(),2,8,'mirin kimono kata  branco karate algodao infantil');
INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI MaxiPro   Infantil',1,'210,0','269,8','FIGHT  - indicado para KATA -100% algodão','OPC1',now(),10,40,'infantil kimono kata  branco karate algodao');
INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI MaxiPro   Adulto',1,'250,0','321,1','FIGHT  - indicado para KATA -100% algodão','OPC2',now(),42,48,'adulto kimono kata  branco karate algodao');
INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI MaxiPro   Adulto extra',1,'292,0','375,1','FIGHT  - indicado para KATA -100% algodão','OPC3',now(),50,56,'adulto extra kimono kata  branco karate algodao');

INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI MaxiPro  Mirim',1,'168,0','215,8','FIGHT  - indicado para KATA -100% algodão ','ATVM',now(),2,8,'mirin kimono kata  branco karate algodao infantil');
INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI MaxiPro   Infantil',1,'210,0','269,8','FIGHT  - indicado para KATA -100% algodão','ATV1',now(),10,40,'infantil kimono kata  branco karate algodao');
INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI MaxiPro   Adulto',1,'250,0','321,1','FIGHT  - indicado para KATA -100% algodão','ATV2',now(),42,48,'adulto kimono kata  branco karate algodao');
INSERT into produto(nome_produto, idCor, valor_atacado,valor_varejo, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('KarateGI MaxiPro   Adulto extra',1,'292,0','375,1','FIGHT  - indicado para KATA -100% algodão','ATV3',now(),50,56,'adulto extra kimono kata  branco karate algodao');
}

{ aikido
INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Básico   Mirim', 1,  89.9, 70.0,'Básico Reforçado 100% algodão ','AKBM',now(),2,8,'aikido kimono mirin infantil reforçado branco algodão');
INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Básico   Infantil', 1,  115.6, 90.0,'Básico Reforçado 100% algodão ','AKBM',now(),10,40,'aikido kimono infantil reforçado branco algodão');
value('AikidoGi Básico   Adulto', 1,  134.9, 105.0,'Básico Reforçado 100% algodão ','AKBM',now(),42,48,'aikido kimono adulto reforçado branco algodão');
INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Básico   Adulto extra', 1,  154.2, 120.0,'Básico Reforçado 100% algodão ','AKBM',now(),50,56,'aikido kimono adulto extra reforçado branco algodão');

INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi MaxiPro   Mirim', 1,  115.6, 90.0,'MaxiPro Reforçado ','MPAM',now(),2,8,'aikido kimono mirin infantil reforçado MaxiPro branco');
INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi MaxiPro   Infantil', 1,  147.7, 115.0,'MaxiPro Reforçado ','MPA1',now(),10,40,'aikido kimono infantil reforçado MaxiPro branco');
INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi MaxiPro   Adulto', 1,  173.4, 135.0,'MaxiPro Reforçado ','MPA2',now(),42,48,'aikido kimono adulto reforçado MaxiPro branco');
INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi MaxiPro   Adulto extra', 1, 205.5, 160.0,'MaxiPro Reforçado ','MPA3',now(),50,56,'aikido kimono adulto extra reforçado MaxiPro branco');

INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Europa   Mirim', 1,  141.3, 110.0,'Europa  Reforçado (Lona PA50%alg.50%pol)  ','EAKM',now(),2,8,'aikido kimono mirin infantil reforçado Europa branco');
INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Europa   Infantil', 1,  173.4, 135.0,'Europa  Reforçado (Lona PA50%alg.50%pol)  ','EAK1',now(),10,40,'aikido kimono infantil reforçado Europa branco');
INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Europa   Adulto', 1,  212.0, 165.0,'Europa  Reforçado (Lona PA50%alg.50%pol)  ','EAK2',now(),42,48,'aikido kimono adulto reforçado Europa branco');
INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Europa   Adulto extra', 1, 244.1, 190.0,'Europa  Reforçado (Lona PA50%alg.50%pol)  ','EAK3',now(),50,56,'aikido kimono adulto extra reforçado Europa branco');

INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Trançadinho   Mirim', 1,  102.8, 80.0,'Trançadinho Reforçado 100% Algodão  ','TIAKM',now(),2,8,'aikido kimono mirin infantil reforçado Trançadinho branco');
INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Trançadinho   Infantil', 1,  122.0, 95.0,'Trançadinho Reforçado 100% Algodão  ','TIAK1',now(),10,40,'aikido kimono infantil reforçado Trançadinho branco');
INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Trançadinho   Adulto', 1,  147.7, 115.0,'Trançadinho Reforçado 100% Algodão  ','TIAK2',now(),42,48,'aikido kimono adulto reforçado Trançadinho branco');
INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Trançadinho   Adulto extra', 1, 173.4, 135.0,'Trançadinho Reforçado 100% Algodão  ','TIAK3',now(),50,56,'aikido kimono adulto extra reforçado Trançadinho branco');

INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Olimpic   Mirim', 1,  141.3, 110.0,'Olimpic Reforçado (Canelado PA 50%alg.50%pol) ','OAKM',now(),2,8,'aikido kimono mirin infantil reforçado Olimpic branco');
INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Olimpic   Infantil', 1,  173.4, 135.0,'Olimpic Reforçado (Canelado PA 50%alg.50%pol) ','OAK1',now(),10,40,'aikido kimono infantil reforçado Olimpic branco');
INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Olimpic   Adulto', 1,  212.0, 165.0,'Olimpic Reforçado (Canelado PA 50%alg.50%pol) ','OAK2',now(),42,48,'aikido kimono adulto reforçado Olimpic branco');
INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Olimpic   Adulto extra', 1, 244.1, 190.0,'Olimpic Reforçado (Canelado PA 50%alg.50%pol) ','OAK3',now(),50,56,'aikido kimono adulto extra reforçado Olimpic branco');

INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Star   Mirim', 1,  109.2, 85.0,'OlimpicStar (PAestrela  - 50%algod. 50%poliester)','OASM',now(),2,8,'aikido kimono mirin infantil reforçado Star  branco');
INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Star   Infantil', 1,  134.9, 105.0,'OlimpicStar (PAestrela  - 50%algod. 50%poliester)','OAS1',now(),10,40,'aikido kimono infantil reforçado Star  branco');
INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Star   Adulto', 1,  160.6, 125.0,'OlimpicStar (PAestrela  - 50%algod. 50%poliester)','OAS2',now(),42,48,'aikido kimono adulto reforçado Star  branco');
INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Star   Adulto extra', 1, 186.3, 145.0,'OlimpicStar (PAestrela  - 50%algod. 50%poliester)','OAS3',now(),50,56,'aikido kimono adulto extra reforçado  star branco');

INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Traçado   Mirim', 1,  141.3, 110.0,'Trançado XLVIII Reforçado 100% algodão ','TAKM',now(),2,8,'aikido kimono mirin infantil reforçado traçado branco');
INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Traçado   Infantil', 1,  167.0, 130.0,'Trançado XLVIII Reforçado 100% algodão ','TAK1',now(),10,40,'aikido kimono infantil reforçado traçado branco');
INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Traçado   Adulto', 1,  205.5, 160.0,'Trançado XLVIII Reforçado 100% algodão ','TAK2',now(),42,48,'aikido kimono adulto reforçado traçado branco');
INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Traçado   Adulto extra', 1, 237.7, 185.0,'Trançado XLVIII Reforçado 100% algodão ','TAK3',now(),50,56,'aikido kimono adulto extra reforçado traçado branco');

INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Losango   Mirim', 1,  141.3, 110.0,'Losango Reforçado 100% algodão ','ALSM',now(),2,8,'aikido kimono mirin infantil reforçado losango branco');
INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Losango   Infantil', 1,  173.4, 135.0,'Losango Reforçado 100% algodão ','ALS1',now(),10,40,'aikido kimono infantil reforçado losango branco');
INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Losango   Adulto', 1,  205.5, 160.0,'Losango Reforçado 100% algodão ','ALS2',now(),42,48,'aikido kimono adulto reforçado losango branco');
INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value('AikidoGi Losango   Adulto extra', 1, 244.1, 190.0,'Losango Reforçado 100% algodão ','ALS3',now(),50,56,'aikido kimono adulto extra reforçado losango branco');


}
{ faixa
INSERT into produto(nome_produto, idCor, valor_varejo,valor_atacado, desc_produto, codigo_produto, data_publicacao,tamanho_minimo,tamanho_maximo,teg) 
value();
}