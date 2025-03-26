<?php

	class Cliente
	{
		// na maioria das vezes, construtores são públicos
		public function __construct
		(
			public string $nome = "", // se não for passado parâmetro, ficará vazio ("")
			public string $cpf = "",  
			public string $celular = ""
		){}
		
		public function getNome()
		{   
			   // "$this" referencia o objeto
			return $this -> nome;	// pega o conteúdo do nome
		}
		
		public function setNome($nome)
		{
			$this -> nome = $nome;	// irá sobrescrever o valor do nome
		}
		
		public function inserir()
		{
		}
	}	// fim da classe

	
?>