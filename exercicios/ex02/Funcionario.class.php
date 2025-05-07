<?php

class Funcionario extends Pessoa
{
	public function __construct
	(
		private string $carteira_profissional = "",
		string $nome
	)
	{
		parent :: __construct($nome);
	}
	
	// métodos GET
	public function getCarteiraProfissional()
	{
		return $this -> carteira_profissional;
	}
	
	public function getNome()
	{
		return $this -> nome;
	}
	
	// métodos SET
	public function setCarteiraProfissional()
	{
		$this -> carteira_profissional = $carteira_profissional;
	}
	
	public function setNome()
	{
		$this -> nome = $nome;
	}
}

?>