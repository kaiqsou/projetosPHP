<?php

	class Usuario
	{
		public function __construct
		(
			private string $nome = "",
			private string $cpf = "",
			private string $email = "",
			$ddd,
			$numero
		)
		{			// pega o $ddd e o $numero para formar o celular 
					// tipo array no celular, p/ armazenar mais de um
			$this -> celular[] = new Celular($ddd, $numero);
		}
		
		public function getNome()
		{
			return $this -> nome;
		}
		
		public function getCpf()
		{
			return $this -> cpf;
		}
		
		public function getEmail()
		{
			return $this -> email;
		}
		
		public function getCelular()
		{
			return $this -> celular;
		}
		
		public function setCelular($ddd, $numero)
		{
			// vai ser necessário passar o DDD e o Número
			$this -> celular[] = new Celular($ddd, $numero);
		}	
	}
?>