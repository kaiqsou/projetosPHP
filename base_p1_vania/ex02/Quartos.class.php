<?php

class Quartos
{
	public function __construct
	(
		private int $numero = 0,
		private int $andar = 0,
		private $hotel = null,
		private $reserva = null
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
	
	public function getHotel()
	{
		return $this -> hotel;
	}
	
	public function getReserva()
	{
		return $this -> reserva;
	}
	
	// métodos SET
	public function setNumero($numero)
	{
		$this -> numero = $numero;
	}
	
	public function setAndar($andar)
	{
		$this -> andar = $andar;
	}
	
	public function setHotel($hotel)
	{
		$this -> hotel = $hotel;
	}
	
	public function setReserva($reserva)
	{
		$this -> reserva = $reserva;
	}
}

?>