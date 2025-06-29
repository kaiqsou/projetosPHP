<?php

class Modelo 
{
	public function __construct
	(
		private string $descritivo = ""
	) {}
	
	// métodos GET
	public function getDescritivo()
	{
		return $this -> descritivo;
	}
	
	// métodos SET
	public function setDescritivo()
	{
		$this -> descritivo = $descritivo;
	}
}

?>