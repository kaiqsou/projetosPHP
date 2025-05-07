<?php

class Aparelho 
{
	public function __construct
	(
		private string $descritivo = "",
		private $modelo = null,
		private $cliente = null
	){}
	
	
	// métodos GET
	public function getDescritivo()
	{
		return $this -> descritivo;
	}
	
	public function getModelo()
	{
		return $this -> modelo;
	}
	
	public function getCliente()
	{
		return $this -> cliente;
	}
	
	// métodos SET
	public function setDescritivo()
	{
		$this -> descritivo = $descritivo;
	}
}

?>