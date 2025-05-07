<?php

class Hotel
{
	public function __construct
	(
		private string $cnpj = "",
		private string $razao_social = "",
		private array $quarto = array()
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
	
	public function getQuarto()
	{
		return $this -> quarto;
	}
	
	// métodos SET
	public function setCnpj()
	{
		$this -> cnpj = $cnpj;
	}
	
	public function setRazaoSocial()
	{
		$this -> razao_social = $razao_social;
	}
	
	public function setQuarto($quarto)
	{
		$this -> quarto[] = $quarto;
	}
}

?>