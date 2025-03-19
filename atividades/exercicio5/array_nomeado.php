<?php

/*
5. Tabela de Produtos (Array nomeado)
Crie um array nomeado onde a chave é o nome de um produto e o valor é seu preço. Exiba os produtos em uma tabela HTML.
*/

$produtos = array(
			array ("Nome" => "Banana", "Preço" => 1.50), 
			array ("Nome" => "Pacote de cartas de Pokémon", "Preço" => 3.15), 
			array ("Nome" => "Robux", "Preço" => 5)
			);
			
			
?>

<!doctype html>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
	</head>

	<body>
		<h1>Tabela de Produtos (Array Nomeado)</h1>
		<table border="1">
		<tr>
			<th>Nome</th>
			<th>Preço</th>
		</tr>
		<?php 
			
			foreach($produtos as $dados)
			{
				echo "<tr>";
				echo "<td>{$dados["Nome"]}</td>";
				echo "<td>{$dados["Preço"]}</td>";
				echo "</tr>";
			}
		
		?>
		</table>
	</body>
</html>