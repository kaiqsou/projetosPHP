<?php
	require_once "models/Conexao.class.php";
	require_once "models/categoriaDAO.class.php";
	require_once "models/categoria.class.php";

	class categoriaController
	{
		public function listar()
		{
			// buscar dados no banco
			$categoriaDAO = new categoriaDAO();
			$retorno = $categoriaDAO -> buscar_todas();
			
			// mostra a view
			require_once "views/listar_categorias.php";
		}
		
		public function inserir()
		{
			$erro = "";
			if ($_POST)
			{
				// verificar se descrição está preenchida
				if(empty($_POST["descritivo"]))
				{
					$erro = "Preencha a categoria";
				}
				// inserir a nova categoria no bd caso esteja preenchido
				else
				{
									    // ou (0, $_POST["descritivo"]);
					$categoria = new Categoria(descritivo: $_POST["descritivo"]);
					
					$categoriaDAO = new categoriaDAO();
					$retorno = $categoriaDAO -> inserir($categoria);
					header("location:index.php?controle=categoriaController&metodo=listar&msg=$retorno");
				}

			}
			require_once "views/form_categoria.php";
		}
		
		public function alterar()
		{
			$erro = "";
			if($_POST)
			{
				// verificar se o descritivo está preenchido
				if(empty($_POST["descritivo"]))
				{
					$erro = "Preencha a categoria";
				}
				// alterar a categoria no bd caso esteja preenchido
				else
				{
									    // ou ($_POST[id_categoria], $_POST["descritivo"]);
					$categoria = new Categoria(id_categoria: $_POST["id_categoria"], descritivo: $_POST["descritivo"]);
					$categoriaDAO = new categoriaDAO();
					$retorno = $categoriaDAO -> alterar($categoria);
					header("location:index.php?controle=categoriaController&metodo=listar&msg=$retorno");
				}
			}
			if(isset($_GET["id"]))
			{
				$categoria = new Categoria($_GET["id"]);
				$categoriaDAO = new categoriaDAO();
				$retorno = $categoriaDAO -> buscar_uma_categoria($categoria);
				
				require_once "views/edit_categoria.php";
			}
		}
		
		public function excluir()
		{
			if(isset($_GET["id"]))
			{
				$categoria = new Categoria($_GET["id"]);
				$categoriaDAO = new categoriaDAO();
				$retorno = $categoriaDAO -> excluir($categoria);
				header("location:index.php?controle=categoriaController&metodo=listar&msg=$retorno");
			}
		}
	}

?>