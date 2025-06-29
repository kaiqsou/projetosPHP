<?php

// por ser uma relação bilateral entre telefone e pessoa,
// ambos estarão dentro um do outro como atributo

// telefone pode ser vários, então deve ser um array

abstract class Pessoa
{
	public function __construct
	(
		protected string $nome = "",
	 // método 1: private $telefone = []
		int $ddd = 0,
		string $numero = "" 
	)
	{
		// construindo o telefone com os atributos recebidos
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
	public function setNome()
	{
		$this -> nome = $nome;
	}
	
	public function setTelefone(int $ddd, string $numero)
	{
		$this -> telefone[] = new Telefone($ddd, $numero);
	}
}

?>