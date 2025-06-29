<?php

	class Produto
	{
		public function __construct
		(
			private string $nome = "",
			private string $descricao = "",
			private float $preco = 0.00,
			private array $fornecedor = array()	
		){}
		
		public function getNome()
		{
			return $this -> nome;
		}
		
		public function getDescricao()
		{
			return $this -> descricao;
		}
		
		public function getPreco()
		{
			return $this -> preco;
		}
		
		public function getFornecedor()
		{
			return $this -> fornecedor;
		}
		
		public function setFornecedor(Fornecedor $forn)
		{ 
			$this -> fornecedor[] = $forn;
		}
	}
	
?>