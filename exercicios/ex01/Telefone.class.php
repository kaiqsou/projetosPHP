<?php

class Telefone
{
	public function __construct
	(
		private int ddd = 0,
		private string numero = ""
	) {}
		
	public function getDdd()
	{
		$this -> ddd;
	}
		
	public function getNumero()
	{
		$this -> numero;
	}
}

?>