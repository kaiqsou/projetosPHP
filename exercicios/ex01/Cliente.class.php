<?php

class Cliente extends Pessoa
{
	public function __construct
	(
		private string $cpf = "",
		string $nome
	) 
	{
		parent :: __construct($nome);
	}
	
	// método GET
	public function getCpf()
	{
		return $this -> cpf;
	}
	
	public function getNome()
	{
		return $this -> nome;
	}
	
	// métodos SET
	public function setCpf()
	{
		$this -> cpf = $cpf;
	}
	
	public function setNome()
	{
		$this -> nome = $nome;
	}
}

?>