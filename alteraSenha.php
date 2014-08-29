<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>SGC - Sistema de Gerenciamento de Campeonatos</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/funcoes.js"></script>
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
		  <li><a href="alteraSenha">Alterar Senha</a></li>
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
      <h2>Alterar Senha</h2>
	  <form name="frmSenha" method="post" action="validarSenha.php" align=center onSubmit="return validaSenha(this)">
      <p>Preencha os campos abaixo para alterar sua senha.
	  <table name="tbLogin" border=0 align=center>
      <tr><td><b>Senha antiga: </b></td><td><input type="password" name="txtAntiga" size="20" / required></td></tr>
	  <tr><td colspan=2 height=10></td></tr>
	  <tr><td><b>Nova senha: </b></td><td><input type="password" name="txtNova" size="20" / required></td></tr>
	  <tr><td colspan=2 height=10></td></tr>
	  <tr><td><b>Repita a Nova senha: </b></td><td><input type="password" name="txtRenova" size="20" / required></td></tr>
	  <tr><td colspan=2 height=10></td></tr>
	  <tr><td></td><td align=right><input type="submit" value="Salvar alterações" /></td></tr>
	  </table>	  
	  </form></p>
	  <?php
	  
		if(isset($_GET['valid'])){
			if ($_GET['valid'] == "ok"){
				echo "<p align='center'>Senha alterada com sucesso! Efetue <a href='logout.php'>logout</a> para que as alterações tenham efeito.</p>";
			}elseif ($_GET['valid'] == "nao_ok"){
				echo "<p align='center'>Senha antiga diferente da cadastrada no sistema. Tente novamente. Clique <a href='alteraSenha.php'>aqui</a> para fechar esta mensagem!</p>";
			}elseif ($_GET['valid'] == "erro"){
				echo "<p align='center'>Ocorreu um erro em seu cadastro. Clique <a href='alteraSenha.php'>aqui</a> para fechar esta mensagem!</p>";
			}
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
