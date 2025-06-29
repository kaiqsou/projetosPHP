<?php

// por herdar de pessoa, não precisa do getNome()/setNome() e nem do
// getTelefone()/setTelefone()

class Cliente extends Pessoa
{
	public function __construct
	(
		private string $cpf = "",
		string $nome,
		int $ddd,
		string $numero
	) 
	{
		parent :: __construct($nome, $ddd, $numero);
	}
	
	// método GET
	public function getCpf()
	{
		return $this -> cpf;
	}
	
	// métodos SET
	public function setCpf()
	{
		$this -> cpf = $cpf;
	}
}

?>