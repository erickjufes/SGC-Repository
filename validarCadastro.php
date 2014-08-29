<?php
	
	//ob_start();
	
	session_start("sgc");
	
	include_once 'classes.php';

	$nome = mysql_real_escape_string($_POST['txtNome']);
	$nasc = mysql_real_escape_string($_POST['cboAno'] . "-" . $_POST['cboMes'] . "-" . $_POST['cboDia']);
	$email = mysql_real_escape_string($_POST['txtEmail']);
	$login = mysql_real_escape_string($_POST['txtLoginEsc']);
	$senha = mysql_real_escape_string($_POST['txtSenhaEsc']);
	$confirmSenha = mysql_real_escape_string($_POST['txtSenhaEscConfirm']);
	
	if (($nome == '') || ($nasc == '') || ($email == '') || ($login == '') || ($senha == '') || ($confirmSenha == '')){
		header("index.php?valid=empty2");
	}elseif ($senha != $confirmSenha){
		header("index.php?valid=nopass");
	}else{
		
		$usuario = new Usuario($nome, $nasc, $email, $login, $senha);
		
		require('DBConnect.php');
		
		$mydb = new DB;
		$validarLogin = $mydb->cadastraUsuario($usuario);
		
		if ($validarLogin == "ok"){
			header('Location: index.php?valid=cad_yes');
		}elseif ($validarLogin == "nao_ok"){
			header("Location: index.php?valid=cad_no");
		}elseif($validarLogin == "exists"){
			header("Location: index.php?valid=" . $validarLogin);
		}
	}
?>
	