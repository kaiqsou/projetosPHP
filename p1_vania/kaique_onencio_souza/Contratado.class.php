<?php

	class Contratado extends Pessoa
	{
		public function __construct
		(
			private string $cnpj = "",
			string $nome,
			int $ddd,
			string $numero,
			private $festa = null
		) 
		{
			parent :: __construct($nome, $ddd, $numero); // adicionar aqui depois quando atualizar os atributos
		}
		
		// métodos GET 
		public function getCnpj()
		{
			return $this -> cnpj;
		}
		
		public function getFesta()
		{
			return $this -> festa;
		}
		
		// métodos SET
		public function setCnpj($cnpj)
		{
			$this -> cnpj = $cnpj;
		}
		
		public function setFesta($festa)
		{
			$this -> festa = $festa;
		}
	}

?>