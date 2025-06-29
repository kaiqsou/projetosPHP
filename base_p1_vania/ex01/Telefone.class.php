<?php

// por ser uma relação bilateral entre telefone e pessoa,
// ambos estarão dentro um do outro como atributo

class Telefone
{
	public function __construct
	(
		private int $ddd = 0,
		private string $numero = "",
		private $pessoa = null
	) {}
	
	// métodos GET
	public function getDdd()
	{
		return $this -> ddd;
	}
		
	public function getNumero()
	{
		return $this -> numero;
	}
	
	public function getPessoa()
	{
		return $this -> pessoa;
	}
	
	// métodos SET - é obrigatório ter parâmetros
	public function setDdd($ddd)
	{
		$this -> ddd = $ddd;
	}
	
	public function setNumero($numero)
	{
		$this -> numero = $numero;
	}
	
	public function setPessoa($pessoa)
	{
		$this -> pessoa = $pessoa;
	}
}

?>