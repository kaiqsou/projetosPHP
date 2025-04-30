<?php
	class Produto
	{
		public function __construct(private string $nome = "", private float $preco = 0.00, 
		private array $categoria = array()){}
		
		public function getNome()
		{
			return $this->nome;
		}
		
		public function getPreco()
		{
			return $this->preco;
		}
		
		public function getCategoria()
		{
			return $this->categoria;
		}
		
		public function setCategoria($categoria)
		{
			$this->categoria[] = $categoria;
		}
	}
?>