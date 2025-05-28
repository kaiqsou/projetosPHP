<?php

class Hospede extends Pessoa
{
	public function __construct
	(
		private string $cpf = "",
		string $nome,
		private $reserva = null
	)
	{
		parent :: __construct($nome);
	}
	
	// métodos GET
	public function getCpf()
	{
		return $this -> cpf;
	}
	
	public function getReserva()
	{
		return $this -> reserva;
	}
	
	// métodos SET
	public function setCpf($cpf)
	{
		$this -> cpf = $cpf;
	}
	
	public function setReserva($reserva)
	{
		$this -> reserva = $reserva;
	}
}

?>