<?php

	abstract class Pessoa
	{
		public function __construct
		(
			protected string $nome = "",
			int $ddd = 0,
			string $numero = ""
		) 
		{
			$this -> telefone[] = new Telefone($ddd, $numero);
		}
		
		// métodos GET 
		public function getNome()
		{
			return $this -> nome;
		}
		
		public function getTelefone()
		{
			return $this -> telefone;
		}
		
		// métodos SET
		public function setNome($nome)
		{
			$this -> nome = $nome;
		}
		
		public function setTelefone(int $ddd, string $numero)
		{
			$this -> telefone[] = new Telefone($ddd, $numero);
		}
	}

?>