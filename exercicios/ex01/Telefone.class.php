<?php

class Telefone
{
	public function __construct
	(
		private int $ddd = 0,
		private string $numero = ""
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
	
	// métodos SET
	public function setDdd()
	{
		$this -> ddd = $ddd;
	}
	
	public function setNumero()
	{
		$this -> numero = $numero;
	}
}

?>