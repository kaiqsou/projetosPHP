<?php

	require_once "models/Conexao.class.php";
	require_once "models/Animal.class.php";
	require_once "models/animalDAO.class.php";
	require_once "models/Avistamento.class.php";
	require_once "models/avistamentoDAO.class.php";

	class avistamentoController
	{
		public function listar()
		{
			
			$avistamentoDAO = new avistamentoDAO();
			$avistamentos = $avistamentoDAO -> buscar_todos();
			
			$animalDAO = new animalDAO();
			$animais = $animalDAO -> buscar_animais();
			
			require_once "views/listar_avistamentos.php";
		}
		
		public function inserir()
		{
			$animalDAO = new animalDAO();
			$animais = $animalDAO -> buscar_animais();
			
			if ($_POST)
			{
                $avistamento = new Avistamento
                ( 
					0,
					$_POST["animais"],
					$_POST["data_avistamento"], 
					$_POST["perigo"],
					$_POST["local_avistamento"]
                );
					
                $avistamentoDAO = new AvistamentoDAO();
                $avistamentos = $avistamentoDAO -> inserir($avistamento);
			}
			require_once "views/form_avistamentos.php";
		}
	}
	
?>