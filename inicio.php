<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>SGC - Sistema de Gerenciamento de Campeonatos</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<!--[if lt IE 8]>
<style type="text/css">
.nav-bg {padding:12px 0 0 0;}
</style>
<![endif]-->
</head>
<body>
<div class="wrapper">
  <!--headeer-->
  <header>
  <div class="header"> <a href="#">SGC</a>
    <p><a href="#">Sistema de Gerenciamento de Campeonatos</a></p>
    <div class="clear"></div>
    <!--nav-->
    <div class="nav-bg">
      <div class="nav">
        <ul>
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Campeonatos</a></li>
          <li><a href="#">Ranking</a></li>
		  <li><a href="alteraSenha.php">Alterar Senha</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
        <div class="clear"></div>
      </div>
    </div>
    <!--nav end-->
  </div>
  </header>
  <!--headeer end-->
  <!--banner-->
  <div class="banner"><img src="images/Gramado_560.jpg" width="940" height="417" alt="banner"></div>
  <!--banner end-->
  <div class="cotainer">
    <div class="cotainer-center flt_ce">
      <h2>Bem-vindo ao SGC!</h2>
	  <?php
		//include('validarLogin.php');
		
		session_start();
		if ($_SESSION['nome'] == ''){
			echo "<p>Sua sessão expirou por tempo de inatividade. Realize um novo login para iniciar uma nova sessão</p>";
		}else{
			echo "<p>Seja bem vindo, " . $_SESSION['nome'] . " !!</p>";
			echo "<p>Escolha um campeonato para começar!</p>";
		}
		?>
	  </div>
    <div class="clear"></div>
  </div>
  <div class="fotter">
    <div id="nav">
      <ul>
        <li><a href="#"class="pad_last">Inicio</a></li>
        <li><a href="#">Camepaonatos</a></li>
        <li><a href="#">Ranking</a></li>
		<li><a href="alteraSenha.php">Alterar Senha</a></li>
        <li class="no_border"><a href="logout.php">Logout</a></li>
      </ul>
      <div class="clear"></div>
    </div>
    <div class="icons">
      <div class="icon1"> <a href="#">RSS</a> </div>
      <div class="icon2"> <a href="#">Twitter</a> </div>
      <div class="icon3 pad_last"> <a href="#">Facebook</a> </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <p>Copyright © 2014 SGC. All rights reserved. Design by <a href="http://www.freecsstemplates.com" target="_blank" rel="nofollow">FreeCSSTemplates.com</a></p>
  </div>
</div>
</body>
</html>
