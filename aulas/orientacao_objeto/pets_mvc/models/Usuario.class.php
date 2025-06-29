<?php

	class Usuario
	{
		public function __construct
		(
			private int $id_usuario = 0,
			private string $nome = "",
			private string $celular = "",
			private string $email = "",
			private string $senha = ""
		){}
		
		// MÉTODOS ID_USUARIO
		public function getId_usuario()
		{
			return $this -> id_usuario;
		}
		
		public function setId_usuario()
		{
			$this -> id_usuario = $id_usuario;
		}
		
		// MÉTODOS NOME
		public function getNome()
		{
			return $this -> nome;
		}
		
		public function setNome()
		{
			$this -> nome = $nome;
		}
		
		// MÉTODOS CELULAR
		public function getCelular()
		{
			return $this -> celular;
		}
		
		public function setCelular()
		{
			$this -> celular = $celular;
		}
		
		// MÉTODOS EMAIL
		public function getEmail()
		{
			return $this -> email;
		}
		
		public function setEmail()
		{
			$this -> email = $email;
		}
		
		// MÉTODOS SENHA
		public function getSenha()
		{
			return $this -> senha;
		}
		
		public function setSenha()
		{
			$this -> senha = $senha;
		}
	}

?>