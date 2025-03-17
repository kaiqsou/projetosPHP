<?php

/*

4. Matriz 2x2 Estática
Crie uma matriz 2x2 e exiba seus valores em uma tabela HTML, usando comando for.

*/

?>

<!doctype html>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
	</head>

	<body>
		<h3>Matriz 2x2 Estática</h3>
			<?php
			
				$matriz = array
				(
				array("marina", "kaique"),
				array("tamires", "yasmin"),
				);
				
				for($linha = 0; $linha <= 1; $linha++)
				{
					for($coluna = 0; $coluna <= 1; $coluna++)
					{
						echo "{$matriz[$linha][$coluna]} ";
					}
					echo "<br>";
				}
			?>
	</body>
</html>