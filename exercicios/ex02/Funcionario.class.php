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
	
	// métodos SET
	public function setCarteiraProfissional($carteira_profissional)
	{
		$this -> carteira_profissional = $carteira_profissional;
	}
}

?>