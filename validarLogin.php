<?php
	
	//ob_start();
	
	session_start("sgc");
	
	include_once 'classes.php';

	$login = mysql_real_escape_string($_POST['txtLogin']);
	$senha = mysql_real_escape_string($_POST['txtSenha']);
	
	if (($login == '') || ($senha == '')){
		header("Location: index.php?valid=empty");
	}else{
		require('DBConnect.php');
		
		$mydb = new DB;
		$validarLogin = $mydb->validarLoginSGC($login,$senha);
		
		if ($_SESSION['login'] != ''){
			$usuario = new Usuario($_SESSION['nome'], $_SESSION['nascimento'], $_SESSION['email'], $_SESSION['login'], $_SESSION['senha']);
			header('Location: inicio.php');
		}else{
			header("Location: index.php?valid=no");
		}
	}
?>
	