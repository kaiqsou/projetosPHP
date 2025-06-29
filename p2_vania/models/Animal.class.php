<?php 

	class Animal
	{
		public function __construct
		(
			private int $idanimais = 0, 
			private string $nome = "",
			private string $especie = ""
		){}
		
		public function getIdAnimais()
		{
			return $this -> idanimais;
		}
		
		public function getNome()
		{
			return $this -> nome;
		}
		
		public function getEspecie()
		{
			return $this -> especie;
		}
	}

?>