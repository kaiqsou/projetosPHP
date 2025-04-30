<?php

class Cliente extends Pessoa
{
	public function __construct
	(
		private string $cpf = ""
	)
	
	public function getCpf()
	{
		return $this -> cpf;
	}
}

?>