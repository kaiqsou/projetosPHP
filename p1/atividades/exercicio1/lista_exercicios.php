<?php

/* 		1. Exibir um Vetor Simples
		  Crie um vetor com 5 nomes e exiba-os em uma lista <ul> no HTML. 
*/
	
/*  	Forma 1 de fazer:
		$nomes = array("Kaique", "Marina", "Tamires", "Yasmin", "Ivan");
		
		echo "<ul>";
		
		foreach($nomes as $nome)
		{
			echo "<li>$nome</li>";
		}
		
		echo "</ul>";	
*/
?>

<!doctype html>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
	</head>

	<body>
		<!-- Forma 2 de fazer -->
		<h3>Lista de Nomes</h3>
		<ul>
			<?php
				$nomes = array("Kaique", "Marina", "Tamires", "Yasmin", "Ivan");
				foreach($nomes as $nome)
				{
					echo "<li>$nome</li>";
				}
			?>
		</ul>
	</body>
</html>