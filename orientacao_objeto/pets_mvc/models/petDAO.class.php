<?php

	class petDAO extends Conexao
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function inserir($pet)
		{
			$sql = "INSERT INTO pets (nome, idade, raca, cor, id_usuario)
					VALUES(?, ?, ?, ?, ?)";
			$stm = $this -> db -> prepare($sql);
			$stm -> bindValue(1, $pet -> getNome());
			$stm -> bindValue(2, $pet -> getIdade());
			$stm -> bindValue(3, $pet -> getRaca());
			$stm -> bindValue(4, $pet -> getCor());
			// vai mudar após login
			$stm -> bindValue(5, $pet -> getUsuario() -> getId_usuario()); // definindo os pets pro usuário
			$stm -> execute();
			$this -> db = null;
			return "Pet cadastrado com sucesso";
		}
	}

?>