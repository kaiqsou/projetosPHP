<?php

// por herdar de pessoa, não precisa do getNome()/setNome() e nem do
// getTelefone()/setTelefone()

class Tecnico extends Pessoa
{
	public function __construct
	(
		private string $especialidade = "",
		private array $aparelho = array(),
		string $nome,
		int $ddd,
		string $numero
	) 
	{
		parent :: __construct($nome, $ddd, $numero);
	}


	// métodos GET
	public function getEspecialidade()
	{
		return $this -> especialidade;
	}
	
	public function getAparelho()
	{
		return $this -> aparelho;
	}
	
	// métodos SET
	public function setEspecialidade($especialidade)
	{
		$this -> especialidade = $especialidade;
	}
	
	public function setAparelho($aparelho)
	{
		$this -> aparelho[] = $aparelho;
	}
}
	
?>