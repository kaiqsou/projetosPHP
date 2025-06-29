<?php

	require_once "models/Conexao.class.php";
	require_once "models/Animal.class.php";
	require_once "models/animalDAO.class.php";
	require_once "models/Avistamento.class.php";
	require_once "models/avistamentoDAO.class.php";

	class animalController
	{
		public function listar()
		{
			$animalDAO = new animalDAO();
			$retorno = $animalDAO -> buscar_todos();

			require_once "views/listar_animais.php";
		}
	}
	
?>