<?php

class Hotel
{
	public function __construct
	(
		private string $cnpj = "",
		private string $razao_social = "",
		private $quartos = []
	 /* método 2:
		int $numero = 0,
		int $andar = 0 
	*/
	){}
	
	// métodos GET
	public function getCnpj()
	{
		return $this -> cnpj;
	}
	
	public function getRazaoSocial()
	{
		return $this -> razao_social;
	}
	
	public function getQuartos()
	{
		return $this -> quartos;
	}
	
	// métodos SET
	public function setCnpj($cnpj)
	{
		$this -> cnpj = $cnpj;
	}
	
	public function setRazaoSocial($razao_social)
	{
		$this -> razao_social = $razao_social;
	}
	
	public function setQuartos($quartos)
	{
		$this -> quartos[] = $quartos;
	}
}

?>