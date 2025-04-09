<?php
	// 'Conexao' é o pai dessa classe
	class UsuarioDAO extends Conexao
	{
		public function __construct()
		{
			parent::__construct();	// chamando o construtor do pai
		}
		
		public function inserir($usuario)
		{
			$sql = "INSERT INTO usuario(nome, celular, email, senha)
					VALUES(?, ?, ?, ?)"; // os ? são para segurança do banco
			// o prepare torna os campos com '?' como valor e não mais como comando SQL
			$stm = $this -> db -> prepare($sql);
			$stm -> bindValue(1, $usuario -> getNome());
			$stm -> bindValue(2, $usuario -> getCelular());
			$stm -> bindValue(3, $usuario -> getEmail());
			$stm -> bindValue(4, $usuario -> getSenha());
			$stm -> execute();
			$this -> db = null; // fecha a conexão
			return "Usuário inserido com sucesso";
		}
	}

?>