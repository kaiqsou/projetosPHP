<?php

	class Pet
	{
		public function __construct
		(
			private string $nome = "",
			private int $idade = 0,
			private string $cor = "",
			private string $raca = "",
			private $usuario = null
		){}
		
		// métodos get e set são necessários quando os atributos são privados
		
		// métodos get
		public function getUsuario()
		{
			return $this -> usuario;
		}
		
		public function getNome()
		{
			return $this -> nome;
		}
		
		public function getIdade()
		{
			return $this -> idade;
		}
		
		public function getCor()
		{
			return $this -> cor;
		}
		
		public function getRaca()
		{
			return $this -> raca;
		}
		
		// métodos set
		public function setNome($nome)
		{
			$this -> nome = $nome;
		}
		
		public function setIdade($idade)
		{
			$this -> idade = $idade;
		}
		
		public function setCor($cor)
		{
			$this -> cor = $cor;
		}
		
		public function setRaca($raca)
		{
			$this -> raca = $raca;
		}
	}

?>