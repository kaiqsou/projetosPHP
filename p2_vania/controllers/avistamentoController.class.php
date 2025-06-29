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

			$msg = ["", "", ""];
			$erro = false;
			
			if ($_POST)
			{
				if (empty($_POST["data_avistamento"]))
				{
					$msg[0] = "Por favor, selecione uma data";
					$erro = true;
				}

				if (empty($_POST["local_avistamento"]))
				{
					$msg[1] = "Por favor, indique o local";
					$erro = true;
				}

				if ($_POST["animais"] == 0)
				{
					$msg[2] = "Por favor, escolha um animal";
					$erro = true;
				}

				if (!$erro)
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
			}
			require_once "views/form_avistamentos.php";
		}
	}
	
?>