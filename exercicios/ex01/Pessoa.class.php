<?php

class Pessoa
{
	public function __construct
	(
		protected string $nome = "",
		private $telefone = null
	){}
	
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
	public function setNome()
	{
		$this -> nome = $nome;
	}
	
}

?>