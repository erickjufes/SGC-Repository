<?php

class Usuario{
	private $nome;
	private $nascimento;
	private $login;
	private $email;
	private $senha;
	
	public function __construct($nome, $nascimento, $email, $login, $senha){
		$this->nome = $nome;
		$this->nascimento = $nascimento;
		$this->email = $email;
		$this->login = $login;
		$this->senha = $senha;
	}
	
	public function setNome($nome){
		$this->nome = $nome;
	}
	
	public function getNome(){
		return $this->nome;
	}
	
	public function setNascimento($nasc){
		$this->nascimento = $nasc;
	}
	
	public function getNascimento(){
		return $this->nascimento;
	}
	
	public function setEmail($email){
		$this->email = $email;
	}
	
	public function getEmail(){
		return $this->email;
	}
	
	public function setLogin($login){
		$this->login = $login;
	}
	
	public function getLogin(){
		return $this->login;
	}
	
	public function setSenha($senha){
		$this->senha = $senha;
	}
	
	public function getSenha(){
		return $this->senha;
	}
}
	


?>