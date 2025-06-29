<?php
	class avistamentoDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function inserir($avistamento)
		{
			$sql = "INSERT INTO avistamentos (idanimais, data_avistamento, perigo, local_avistamento) 
			VALUES(?, ?, ?, ?)";
			try 
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $avistamento -> getIdAnimais());
				$stm->bindValue(2, $avistamento -> getData());
				$stm->bindValue(3, $avistamento -> getPerigo());
				$stm->bindValue(4, $avistamento -> getLocal());
				$stm->execute();

				$this->db = null;
				return "Avistamento inserido com sucesso";
			}
			catch(PDOException $e) 
			{
				$this -> db = null;
				return "Problema ao inserir avistamento";
			}	
		}
		
		public function buscar_todos()
		{
			$sql = "SELECT av.*, an.* 
			FROM avistamentos AS av
			INNER JOIN animais AS an ON av.idanimais = an.idanimais";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->execute();
				$this->db = null;
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this->db = null;
				return "Problema ao buscar";
			}
		}
	}//fim da classe avistamentoDAO
?>