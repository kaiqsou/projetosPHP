<?php

/*
5. Tabela de Produtos (Array nomeado)
Crie um array nomeado onde a chave é o nome de um produto e o valor é seu preço. Exiba os produtos em uma tabela HTML.
*/

$produtos = array("Banana" => 1.50, "Pacote de cartas de Pokémon" => 3.15, "Robux" => 5);

?>

<!doctype html>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
	</head>

	<body>
		<h3>Tabela de Produtos (Array Nomeado)</h3>
		<table>
		<?php 
			
			foreach($produtos as $indice => $dados)
			{
				echo "$indice - $$dados reais<br>";
			}
		
		?>
		</table>
	</body>
</html>