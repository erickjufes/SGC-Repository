<?php
	
	//ob_start();
	
	session_start();
	
	$antiga = mysql_real_escape_string($_POST['txtAntiga']);
	$nova = mysql_real_escape_string($_POST['txtNova']);
	$renova = mysql_real_escape_string($_POST['txtRenova']);
	
	if (($antiga == '') || ($nova == '')){
		header("alteraSenha.php?valid=empty");
	}elseif ($nova != $renova){
		header("index.php?valid=diff");
	}else{
		
		require('DBConnect.php');
		
		$mydb = new DB;
		$validarSenha = $mydb->alterarSenha($_SESSION['login'],$antiga,$nova);
		
		header('Location: alteraSenha.php?valid=' . $validarSenha);
	}
?>
	