<!DOCTYPE	html>
<html>
    
	<head>
        <?php
            if(!isset($_SESSION)){
                session_start();
            }
            
            
        ?>
        
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<link	rel="stylesheet" href="css/reset.css">		
        <link	rel="stylesheet" href="css/headerAndFoter.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        
        <?php print @$header_css;?>
        <title><?php	print @$header_title;	?></title>
        <?php $link?>
        
        <?php
        if(empty($quantidade)){
            $somaQuantidade = 0; 
            $valorTotal = 0;
        }
        if(empty($_SESSION['itens'])){
            
            
        $infantil = 'infantil';
        $adulto = 'adulto';
        $aikido = 'aikido';
        $karate = 'karate'; 
        }else{
        
            foreach($_SESSION['itens'] as $pedidos => $quantidade ){
                
                $somaQuantidade += $quantidade;
                $valorTotal += $pedidos['valorVarejo'] * $quantidade;
            }
            
            
            
        }
        
        
        
        ?>
        
    </head>
	<body>
        <header>        
        

                    <div class="cabeca">
                        <section class="logo">
                            <h1><a href="home.php"><img src="img/logo2.png" alt="Logo MCLAY"></a></h1>
                        </section>
                        <section class="busca">
                            <form action="busca.php" method="POST">
                                <input type="search" name="busca">
                                <button>busca</button>
                            </form>
                        </section>
                        <section class="sacola">
                            <?php if(empty($quantidade)){  ?>
                                <p><a href="checkout.php">Nenhum item </a></p>    
                            <?php }else{?>
                                <p><a href="checkout.php"><?=$somaQuantidade ?> </a></p>
                            <?php }?>
                        </section>
                        
                        <section class="menu-opcoes">
                            <nav >
                                <ul>
                                    
                                    <?php if(!isset($_SESSION['usuario'])){
                                        $link = 'telaLogin.php';
                                    }
                                    else{
                                        $link = 'minhaConta.php';
                                    }
                                    ?>
                                    <?php if(isset($_SESSION['usuario'])):?>
                                        <a href="logout.php">logout</a>
                                    <?php endif?>
                                    <li><a href="home.php">Loja</a></li>
                                    <li><a href="<?= $link?>">minha conta</a></li>
                                    <li><a href="sobre.php">sobre</a></li>
                                    <li><a href="contato.php">contato</a></li>
                                    <li><a href="ajuda.php">ajuda</a></li>
                                    
                                        
                                    
                                        
                                </ul>
                            </nav>
                        </section>
                        <section class="menu-roupas">
                            <nav>
                                <ul><p><a href="#" class="menu">Menu</a></p>
                                    <li><a >Karate</a>
                                        <ul>
                                            <li><a href="kimono.php?infantil=<?$infantil?>&karate=<?$karate?>">kimono infantil</a></li>
                                            <li><a href="kimono.php?adulto=<?$adulto?>&karate=<?$karate?>">kimono adulto</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="#">aikido</a>
                                        <ul>
                                            <li><a href="kimono.php?aikido=<?$aikido?>&infantil=<?$infantil?>">kimono infantil</a></li>
                                            <li><a href="kimono.php?aikido=<?$aikido?>&adulto=<?$adulto?>">kimono adulto</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="faixas.php">faixas</a>
                                    
                                    </li>
                                </ul>
                            </nav>
                        </section>
                    </div>
        </header>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/header.js"></script>