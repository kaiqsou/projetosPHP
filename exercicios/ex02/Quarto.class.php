<?php

class Quarto
{
	public function __construct
	(
		private int $numero = 0,
		private int $andar = 0
	){}
	
	// métodos GET
	public function getNumero()
	{
		return $this -> numero;
	}
	
	public function getAndar()
	{
		return $this -> andar;
	}
	
	// métodos SET
	public function setNumero()
	{
		$this -> numero = $numero;
	}
	
	public function setAndar()
	{
		$this -> andar = $andar;
	}
}

?>