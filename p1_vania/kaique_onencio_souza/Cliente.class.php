<?php

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
			parent :: __construct($nome, $ddd, $numero); // adicionar aqui depois quando atualizar os atributos
		}
		
		// métodos GET 
		public function getCpf()
		{
			return $this -> cpf;
		}
		
		// métodos SET
		public function setCpf($cpf)
		{
			$this -> cnpj = $cpf;
		}
	}

?>