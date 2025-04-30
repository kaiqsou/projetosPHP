<?php

abstract class Pessoa
{
	public function __construct
	(
		protected string $nome = "",
		private $telefone = null
	){}
		
	public function getNome()
	{
		return $this -> nome;
	}
		
	public function getTelefone()
	{
		return $this -> telefone;
	}
}

?>