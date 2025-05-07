<?php

class Pessoa
{
	public function __construct
	(
		protected string $nome = ""
	){}
	
	// métodos GET
	public function getNome()
	{
		return $this -> nome;
	}
	
	// métodos SET 
	public function setNome()
	{
		$this -> nome = $nome;
	}
}

?>