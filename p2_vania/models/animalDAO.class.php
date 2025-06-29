<?php
	class animalDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function inserir($animal)
		{
			$sql = "INSERT INTO animais (nome, especie) 
			VALUES(?, ?)";
			try 
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $animal -> getNome());
				$stm->bindValue(2, $animal -> getEspecie());
				$stm->execute();

				$this->db = null;
				return "Animal inserido com sucesso";
			}
			catch(PDOException $e) 
			{
				$this -> db = null;
				return "Problema ao inserir animal";
			}	
		}
		
		public function buscar_animais()
		{
			$sql = "SELECT * FROM animais";
			try
			{
				$stm = $this -> db -> prepare($sql);
				$stm -> execute();

				$this -> db = null;
				return $stm -> fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e) 
			{
				$this -> db = null;
				return "Problema ao buscar os animais";
			}
		}
	}//fim da classe animalDAO
?>