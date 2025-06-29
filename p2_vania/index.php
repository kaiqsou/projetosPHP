<?php
	// acontece se houver requisição via get (como no menu.php, com os links)
	if ($_GET)
	{
		// "controle" e "método" está dentro do href no menu.php
		$controle = $_GET["controle"];
		$metodo = $_GET["metodo"];
		
		// require genérico, a variável mudará de acordo com o que receber
		require_once "controllers/{$controle}.class.php";
		
		$obj = new $controle();
		$obj -> $metodo();
	}
	else 
	{
		require_once "controllers/inicioController.class.php";
		
		$obj = new inicioController();
		$obj -> inicio();
	}
?>