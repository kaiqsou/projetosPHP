<?php

	require_once "../models/Pet.class.php";
	
	$msg = array("", "", "", "");
	$erro = false;
	
	if($_POST)
	{
		if(empty($_POST["nome"]))
		{
			$msg[0] = "O nome é obrigatório.";
			$erro = true;
		}
		
		if(empty($_POST["idade"]))
		{
			$msg[1] = "A idade é obrigatória.";
			$erro = true;
		}
		
		if(empty($_POST["cor"]))
		{
			$msg[2] = "A cor é obrigatória.";
			$erro = true;
		}
		
		if($_POST["raca"] == 0)
		{
			$msg[3] = "Escolha a raça";
			$erro = true;
		}
		
		if(!$erro)
		{
			$pet = new Pet
			(
				$_POST["nome"],
				$_POST["idade"],
				$_POST["cor"],
				$_POST["raca"]
			);
			
			//mostrar os dados
		echo "Nome: {$pet -> getNome()}<br>";
		echo "Idade: {$pet -> getIdade()}<br>";
		echo "Cor: {$pet -> getCor()}<br>";
		echo "Raça: {$pet -> getRaca()}<br>";
		}
	}
?>

<!doctype html>
<html>

	<head>
	
		<title>Pets</title>
		<meta charset="UTF-8">
		
	</head>
	
	<body>
		<h1>Pet</h1>
		
		<form action="#" method="post">
			<label>Nome:</label>
			<input type="text" name="nome">
			<div class="erro"></div>
			
			<label>Idade:</label>
			<input type="number" name="idade">
			<div class="erro"></div>
			
			<label>Cor:</label>
			<input type="text" name="cor">
			<div class="erro"></div>
			
			<label>Raça:</label>
			<select name="raca">
				<option value="0">Escolha a raça</option>
				<option>Pitbull</option>
				<option>Lhasa</option>
				<option>Yorkshire</option>
				<option>Sem raça</option>
			</select>
			<div class="erro"></div>
			<input type="submit" value="Cadastrar">
	</body>
	
</html>

