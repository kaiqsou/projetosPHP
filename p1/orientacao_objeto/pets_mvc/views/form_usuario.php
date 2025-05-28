<?php

	require_once "../models/Conexao.class.php";
	require_once "../models/Usuario.class.php";
	require_once "../models/UsuarioDAO.class.php";
	
	$msg = array("", "", "", "", "");
	$erro = false;
	$mostrarResultado = false;
	$nome = '';
    $celular = '';
    $email = '';
    $senha = '';
	$confirmaSenha = '';
	
	if($_POST)
	{
		if(empty($_POST["nome"]))
		{
			$msg[0] = "O nome é obrigatório.";
			$erro = true;
		}
		
		if(empty($_POST["celular"]))
		{
			$msg[1] = "A idade é obrigatória.";
			$erro = true;
		}
		
		if(empty($_POST["email"]))
		{
			$msg[2] = "A cor é obrigatória.";
			$erro = true;
		}
		
		if(empty($_POST["senha"]))
		{
			$msg[3] = "A senha é obrigatória.";
			$erro = true;
		}
		
		if(empty($_POST["confirmaSenha"]))
		{
			$msg[4] = "Confirme a senha!";
			$erro = true;
		}
		
		if($_POST["senha"] != "" && $_POST["confirmaSenha"] != "")
		{
			if ($_POST["senha"] != $_POST["confirmaSenha"])
			{
				$msg[4] = "As senhas não conferem.";
			}
		}
		
		if(!$erro)
		{
			$usuario = new Usuario(0, $_POST["nome"], $_POST["celular"], 
			$_POST["email"], md5($_POST["senha"]));	// md5 é a criptografia
				
			$usuarioDAO = new UsuarioDAO();
			$retorno = $usuarioDAO -> inserir($usuario);
			echo $retorno;
		}
	}
	
	
?>

<!doctype html>
<html>

	<head>
	
		<title>Usuário</title>
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
		echo "Nome: {$usuario -> getNome()}<br>";
	?>
		<!-- Botão para voltar -->
		<button onclick="window.location.href='form_pet.php'">Voltar</button>
		
		<!-- Se não houver resultados para exibir, mostrará o formulário (Else) -->
		<?php else: ?>
		
		<h1>Usuário</h1>
		
		<form action="#" method="post">
		
			<label>Nome:</label>
			<input type="text" name="nome" value=<?php echo $nome ?>>
			<div class="erro"><?php echo $msg[0] ?></div>
			<br>
			
			<label>Celular:</label>
			<input type="text" name="celular" value=<?php echo $celular ?>>
			<div class="erro"><?php echo $msg[1] ?></div>
			<br>
			
			<label>E-mail:</label>
			<input type="email" name="email" value=<?php echo $email ?>>
			<div class="erro"><?php echo $msg[2] ?></div>
			<br>
			
			<label>Senha:</label>
			<input type="password" name="senha" value=<?php echo $senha ?>>
			<div class="erro"><?php echo $msg[3] ?></div>
			<br>
			
			<label>Confirme a senha:</label>
			<input type="password" name="confirmaSenha" value=<?php echo $confirmaSenha ?>>
			<div class="erro"><?php echo $msg[4] ?></div>
			<br>
			
			<input type="submit" value="Cadastrar">
			
		</form>
		<!-- Finalização do if -->
		<?php endif; ?>
	</body>
</html>