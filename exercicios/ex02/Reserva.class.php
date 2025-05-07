<?php

class Reserva
{
	public function __construct
	(
		private string $data_reserva = "",
		private string $data_entrada = "",
		private string $data_saida = "",
		private $hospede = null,
		private $funcionario = null,
		private array $quarto = array()
	){}
	
	// métodos GET
	public function getDataReserva()
	{
		return $this -> data_reserva;
	}
	
	public function getDataEntrada()
	{
		return $this -> data_entrada;
	}
	
	public function getDataSaida()
	{
		return $this -> data_saida;
	}
	
	public function getHospede()
	{
		return $this -> hospede;
	}
	
	public function getFuncionario()
	{
		return $this -> funcionario;
	}
	
	public function getQuarto()
	{
		return $this -> quarto;
	}
	
	// métodos SET
	public function setDataReserva()
	{
		$this -> data_reserva = $data_reserva;
	}
	
	public function setDataEntrada()
	{
		$this -> data_entrada = $data_entrada;
	}
	
	public function setDataSaida()
	{
		$this -> data_saida = $data_saida;
	}
}

?>