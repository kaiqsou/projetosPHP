<?php

	require_once "../models/Conexao.class.php";
	require_once "../models/petDAO.class.php";
	require_once "../models/Usuario.class.php";
	require_once "../models/Pet.class.php";
	
	$msg = array("", "", "", "");
	$erro = false;
	$mostrarResultado = false;
	$nome = '';
    $idade = '';
    $cor = '';
    $raca = '0';
	
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
			$usuario = new Usuario();
			$pet = new Pet
			(
				$_POST["nome"],
				$_POST["idade"],
				$_POST["cor"],
				$_POST["raca"],
				$usuario
			);
			$petDAO = new petDAO();
			$mostrarResultado = true;
			$retorno = $petDAO -> inserir($pet);
		}
		
		if($erro)
		{
			$nome = $_POST['nome'];
			$idade = $_POST['idade'];
			$cor = $_POST['cor'];
			$raca = $_POST['raca'];
		}
	}
	
	
?>

<!doctype html>
<html>

	<head>
	
		<title>Pets</title>
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
	<?php if ($mostrarResultado): ?>
	<?php
		// mostrar dados/resultado
		echo "Nome: {$pet -> getNome()}<br>";
		echo "Idade: {$pet -> getIdade()}<br>";
		echo "Cor: {$pet -> getCor()}<br>";
		echo "Raça: {$pet -> getRaca()}<br>";
		
		echo "<br><pre>";
		var_dump($pet);
		echo "</pre><br>";
	?>
		<!-- Botão para voltar -->
		<button onclick="window.location.href='form_pet.php'">Voltar</button>
		
		<!-- Se não houver resultados para exibir, mostrará o formulário (Else) -->
		<?php else: ?>
		
		<h1>Pet</h1>
		
		<form action="#" method="post">
		
			<label>Nome:</label>
			<input type="text" name="nome" value=<?php echo $nome ?>>
			<div class="erro"><?php echo $msg[0] ?></div>
			<br>
			
			<label>Idade:</label>
			<input type="number" name="idade" value=<?php echo $idade ?>>
			<div class="erro"><?php echo $msg[1] ?></div>
			<br>
			
			<label>Cor:</label>
			<input type="text" name="cor" value=<?php echo $cor ?>>
			<div class="erro"><?php echo $msg[2] ?></div>
			<br>
			
			<label>Raça:</label>
			<select name="raca" value=<?php echo $raca ?>>
				<option value="0">Escolha a raça</option>
				<option>Pitbull</option>
				<option>Lhasa</option>
				<option>Yorkshire</option>
				<option>Sem raça</option>
			</select>
			<div class="erro"><?php echo $msg[3] ?></div>
			<br>
			
			<input type="submit" value="Cadastrar">
			
		</form>
		<!-- Finalização do if -->
		<?php endif; ?>
	</body>
</html>