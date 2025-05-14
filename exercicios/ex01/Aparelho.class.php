<?php

class Aparelho 
{
	public function __construct
	(
		private string $descritivo = "",
		private $modelo = null,
		// tipando exigindo objeto, diferente de cima, que aceita tudo:
		// private Modelo $modelo = new Modelo(),
		private $cliente = null,
		// private Cliente $cliente = new Cliente(),
		private array $tecnico = array()
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
	
	public function getTecnico()
	{
		return $this -> tecnico;
	}
	
	// métodos SET
	public function setDescritivo($descritivo)
	{
		$this -> descritivo = $descritivo;
	}
	
	public function setModelo($modelo)
	{
		$this -> modelo = $modelo;
	}
	
	public function setCliente($cliente)
	{
		$this -> cliente = $cliente;
	}
	
	public function setTecnico($tecnico)
	{
		$this -> tecnico[] = $tecnico;
	}
}

?>