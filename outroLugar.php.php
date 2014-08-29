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
          <li><a href="#">Meu Time</a></li>
          <li><a href="#">Campeonatos</a></li>
          <li><a href="#">Ranking</a></li>
          <li><a href="#">Fale Conosco</a></li>
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
	  <form name="frmLogin" method="post" action="validarLogin.php" align=center>
      <p>Informe seus dados abaixo para entrar no Sistema.
	  <table name="tbLogin" border=0 align=center>
      <tr><td><b>Login: </b></td><td><input type="text" name="txtLogin" size="20" / required></td></tr>
	  <tr><td colspan=2 height=10></td></tr>
	  <tr><td><b>Senha: </b></td><td><input type="password" name="txtSenha" size="20" / required></td></tr>
	  <tr><td colspan=2 height=10></td></tr>
	  <tr><td></td><td align=right><input type="submit" value="Entrar" /></td></tr>
	  </table>	  
	  </form></p>
      <h3>Se não é cadastrado, preencha o formulário abaixo para entrar para o time!</h3>
      <p><form name="frmCadastro" method="post" action="validarCadastro.php">
	  <table name="tbCadastro" border=0>
      <tr><td><b>Nome: </b></td><td><input type="text" name="txtNome" size="50" / required></td></tr>
	  <tr><td colspan=2 height=10></td></tr>
	  <tr><td><b>Data de Nascimento: </b></td><td><select name="cboDia" required><option value="" />
	  <?php
		for($i=1; $i<=31; $i++){
			echo "<option value={$i}>{$i}</option>";
		}
	  ?></select>
	  <select name="cboMes" required><option value="" />
	  <?php
		for($i=1; $i<=12; $i++){
			echo "<option value={$i}>{$i}</option>";
		}
	  ?></select>
	  <select name="cboAno" required><option value="" />
	  <?php
		$today = getdate();
		$year = $today['year'];
		for($i=$year; $i>=1950; $i--){
			echo "<option value={$i}>{$i}</option>";
		}
	  ?></select>
	  </td>
	  </tr>
	  <tr><td colspan=2 height=10></td></tr>
	  <tr><td>E-mail: </td><td><input type="email" name="txtEmail" size=30 required /></td></tr>
	  <tr><td colspan=2 height=10></td></tr>
	  <tr><td><b>Escolha um login: </b></td><td><input type="text" name="txtLoginEsc" size="20" / required></td></tr>
	  <tr><td colspan=2 height=10></td></tr>
	  <tr><td><b>Escolha uma senha: </b></td><td><input type="password" name="txtSenhaEsc" size="20" / required></td></tr>
	  <tr><td colspan=2 height=10></td></tr>
	  <tr><td><b>Confirme sua senha: </b></td><td><input type="password" name="txtSenhaEscConfirm" size="20" / required></td></tr>
	  <tr><td colspan=2 height=10></td></tr>
	  <tr><td></td><td align=right><input type="submit" value="Entrar" /></td></tr>
	  </table>	  
	  </form></p>
    </div>
    <div class="clear"></div>
  </div>
  <div class="fotter">
    <div id="nav">
      <ul>
        <li><a href="#"class="pad_last">Inicio</a></li>
        <li><a href="#">Meu Time</a></li>
        <li><a href="#">Camepaonatos</a></li>
        <li><a href="#">Ranking</a></li>
        <li class="no_border"><a href="#">Fale Conosco</a></li>
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
