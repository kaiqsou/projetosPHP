<?php

class Tecnico extends Pessoa
{
	public function __construct
	(
		private string $especialidade = "",
		string $nome
	) 
	{
		parent :: __construct($nome);
	}


	// métodos GET
	public function getEspecialidade()
	{
		return $this -> especialidade;
	}
	
	public function getNome()
	{
		return $this -> nome;
	}
	
	// métodos SET
	public function setEspecialidade()
	{
		$this -> especialidade = $especialidade;
	}
	
	public function setNome()
	{
		$this -> nome = $nome;
	}
}
	
?>