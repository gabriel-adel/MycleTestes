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
        
        
        
    </head>
	<body>
        <header>        
        

                    <div class="cabeca">
                        <section class="logo">
                            <h1><a href="home.php"><img src="img/logo.jpg" alt="Logo MCLAY"></a></h1>
                        </section>
                        
                        
                        
                        <section class="menu-opcoes">
                            <nav >
                                <ul>
                                    
                                    <li><a href="listaDeProduto.php">Loja</a></li>
                                    <li><a href="contato.php">contato</a></li>
                                    
                                    <li><a href="karate.php">kimono karate</a></li>
                                    <li><a href="aikido.php">kimono aikido</a></li>
                                    <li><a href="faixa.php">faixa</a></li>    
                                    
                                        
                                </ul>
                            </nav>
                        </section>
                        
                    </div>
        </header>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/header.js"></script>