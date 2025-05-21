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
	public function setNome($nome)
	{
		$this -> nome = $nome;
	}
}

?>