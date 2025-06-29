<?php

	require_once "models/Conexao.class.php";
	require_once "models/produtoDAO.class.php";

	class produtoController
	{
		public function listar()
		{
			$produtoDAO = new produtoDAO();
			$retorno = $produtoDAO -> buscar_todos();
			
			require_once "views/listar_produtos.php";
		}
	}

?>