<?php

	class Fornecedor
	{
		public function __construct
		(
			private string $cnpj = "",
			private string $razaoSocial = "",
		 // private Produto produto = new Produto() // inicializa um Produto vazio
		 // private produto = null  // fracamente tipado
			private Produto $produto /* fortemente tipado, por não inicializar 
			o produto como vazio, é necessário fornecer um valor depois */ 
		){}
		
		public function getCnpj()
		{
			return $this -> cnpj;
		}
		
		public function getRazaoSocial()
		{
			return $this -> razaoSocial;
		}
		
		public function getProduto()
		{
			return $this -> produto;
		}
		
		public function getFornecedor()
		{
			return $this -> fornecedor;
		}
		
		public function setFornecedor(Fornecedor $forn)
		{ 	// forn: valor recebido acima, no SET
			// $this: atributo no construtor 
			$this -> fornecedor[] = $forn;
		}
	}
	
?>