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
		private $quartos = []
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
	
	public function getQuartos()
	{
		return $this -> quartos;
	}
	
	// métodos SET
	public function setDataReserva($data_reserva)
	{
		$this -> data_reserva = $data_reserva;
	}
	
	public function setDataEntrada($data_entrada)
	{
		$this -> data_entrada = $data_entrada;
	}
	
	public function setDataSaida($data_saida)
	{
		$this -> data_saida = $data_saida;
	}
	
	public function setHospede($hospede)
	{
		$this -> hospede = $hospede;
	}
	
	public function setFuncionario($funcionario)
	{
		$this -> funcionario = $funcionario;
	}
	
	public function setQuartos(array $quartos)
	{
		$this -> quartos[] = $quartos;
	}
}

?>