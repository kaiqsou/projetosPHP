<?php
	class inicioController
	{
		public function inicio()
		{
			$produtoController = new produtoController();
			$produtos = $produtoController->listarProdutosAtivos();
			
			require_once "Views/menu.php";
		
		}
	}
?>