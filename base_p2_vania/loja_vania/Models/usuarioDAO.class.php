<?php
	class usuarioDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function autenticacao($usuario)
		{
			$sql = "SELECT nome, tipo, senha FROM usuarios WHERE email = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $usuario->getEmail());
				
				$stm->execute();
				$this->db = null;
				return $stm->fetchAll(PDO::FETCH_OBJ); 
			}
			catch(PDOException $e)
			{
				$this->db = null;
				//return "Problema na autenticação do usuário";
				return $e->getMessage();
			}
		}
		public function inserir($usuario)
		{
			$sql = "INSERT INTO usuarios (nome, email, senha, tipo) VALUES(?,?,?,?)";
			try
			{
			//preparar frase
			$stm = $this->db->prepare($sql);
			//substituir o ponto de interrogação
			$stm->bindValue(1, $usuario->getNome());
			$stm->bindValue(2, $usuario->getEmail());
			$stm->bindValue(3, $usuario->getSenha());
			$stm->bindValue(4, $usuario->getTipo());
			//executar a frase sql
			$stm->execute();
			//fechar a conexão
			$this->db = null;
			return "Usuário inserido com sucesso";
			}
			catch(PDOException $e)
			{
				echo $e->getCode();
				echo $e->getMessage();
				die();
			}
		}
	}
?>