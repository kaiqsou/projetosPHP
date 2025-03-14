<?php

	$msg = array("", "", "", "");

	if($_POST)
	{
		if(empty($_POST["codigo"]))
		{
			$msg[0] = "Por favor, preencha o código do produto.";
		}
		
		if(empty($_POST["nome"]))
		{
			$msg[1] = "Por favor, preencha o nome do produto.";
		}
		
		if(empty($_POST["descricao"]))
		{
			$msg[2] = "Por favor, preencha a descrição do produto.";
		}
		
		if(empty($_POST["preco"]))
		{
			$msg[3] = "Por favor, preencha o preço do produto.";
		}
	}


?>

<!doctype html>
<html>
	<head>
		<title>Produto</title>
		<meta charset="UTF-8">
		<style>
			.erro
			{
				color: red; 
				font-size:16px;
			}
		</style>
	</head>
	
	<body>
	
		<h1>Produto</h1>
		
		<form action="#" method="POST">
		
			<label for="codigo">Código:</label>
			<input type="text" name="codigo">
			<div class="erro"><?php echo $msg[0];?></div>
			<br><br>
			
			<label for="nome">Nome:</label>
			<input type="text" name="nome">
			<div class="erro"><?php echo $msg[1];?></div>
			<br><br>
			
			<label for="descricao">Descrição:</label><br>
			<textarea name="descricao"></textarea>
			<div class="erro"><?php echo $msg[2];?></div>
			<br><br>
			
			<label for="preco">Preço:</label>
			<input type="text" name="preco">
			<div class="erro"><?php echo $msg[3];?></div>
			<br><br>
			
			<input type="submit" value="Enviar">
			
		</form>
		
	</body>
</html>
