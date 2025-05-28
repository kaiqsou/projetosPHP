<?php
	session_start();
	
	echo $_SESSION["nome"];
	echo $_SESSION["tipo"];
?>

<!DOCTYPE html>
<html>

<head> 
	<title>Loja</title>
	<meta charset="UTF-8">
</head>
	
<body> 
	<ul>
		<li>
			<!-- por link, sua requisição é via GET -->
			<a href="index.php?controle=categoriaController&metodo=listar">Categoria</a>
		</li>
			
		<li>
			<a href="index.php?controle=produtoController&metodo=listar">Produto</a>
		</li>
			
		<li>
			<a href="index.php?controle=usuarioController&metodo=login">Entrar</a>
		</li>
	</ul>
</body>

</html>