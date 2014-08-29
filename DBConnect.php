<?php

	require_once 'config.php';
	include_once 'classes.php';
	
	Class DB{
		private $conexao;
		private $mydb;
		private $usuario;
		
		public function openConnection(){
			$this->conexao = mysql_connect(DB_HOST, DB_USER, DB_PASS);
			
			if(!$this->conexao){
				die("Erro ao abrir o SQL" . mysql_error());
			}
		}
		
		public function validarLoginSGC($login,$senha){
			$open = $this->openConnection();
			$this->mydb = mysql_select_db(DB_NAME,$this->conexao);
			
			$sql = "select * from sgc.tb_sgc_usuario where login='" . $login . "' and senha='" . $senha . "'";
			$consulta = mysql_query($sql);
			
			$_SESSION['nome'] = '';
			$_SESSION['nascimento'] = '';
			$_SESSION['login'] = '';
			$_SESSION['email'] = '';
			$_SESSION['senha'] = '';
			
			while ($row = mysql_fetch_assoc($consulta)){
				$_SESSION['nome'] = $row['nome_usuario'];
				$_SESSION['nascimento'] = $row['data_nascimento'];
				$_SESSION['login'] = $row['login'];
				$_SESSION['email'] = $row['email'];
			}
			
			mysql_close();
		}
		
		public function cadastraUsuario(Usuario $usuario){
			$open = $this->openConnection();
			$this->mydb = mysql_select_db(DB_NAME,$this->conexao);
			
			$sql = "select count(*) as total from sgc.tb_sgc_usuario where login='" . $usuario->getLogin() . "'";
			$consulta = mysql_query($sql) or die(mysql_error());
			
			while ($row = mysql_fetch_assoc($consulta)){
				$cont = $row['total'];
			}
			
			if($cont==0){
				$sql = "insert into sgc.tb_sgc_usuario (nome_usuario,data_nascimento,email,login,senha,data_cadastro) values ('" . $usuario->getNome() . "','" . $usuario->getNascimento() . "','" . $usuario->getEmail() . "','" . $usuario->getLogin() . "','" . $usuario->getSenha() . "',now())";
				$consulta = mysql_query($sql);
			
				if($consulta){
					mysql_close();
					return "ok";
				}else{
					mysql_close();
					return "nao_ok";
				}
			}else{
				mysql_close();
				return "exists";
			}
		}
		
		public function alterarSenha($login,$antiga,$nova){
			$open = $this->openConnection();
			$this->mydb = mysql_select_db(DB_NAME,$this->conexao);
			
			$sql = "select * from sgc.tb_sgc_usuario where login='" . $login . "' and senha='" . $antiga . "'";
			$consulta = mysql_query($sql) or die(mysql_error());
			
			while ($row = mysql_fetch_assoc($consulta)){
				$ok = $row['login'];
			}
			
			if($ok == ''){
				mysql_close();
				return "nao_ok";
			}else{
				$sql = "update sgc.tb_sgc_usuario set senha='" . $nova . "' where login='" . $login . "'";
				$consulta = mysql_query($sql) or die(mysql_error());
				
				if($consulta){
					mysql_close();
					return "ok";
				}else{
					return "erro";
				}
			}
		}
	}

?>