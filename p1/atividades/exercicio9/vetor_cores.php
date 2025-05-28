<?php

/* 
9.  Criar um Vetor de Cores e Exibi-las em HTML
	Crie um vetor de cores e use-o para exibir quadrados coloridos (<div style="width:50px; height:50px; background-color:cor;"></div>).
*/

	$cores = array("vermelho", "azul", "verde", "amarelo", "laranja");

?>

<!doctype html>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="./exercicio9/style.css"
	</head>

	<body>
		<h3>Cores</h3>
			<?php
				echo "Escolhidas: ";
				foreach($cores as $dados)
				{
					echo "$dados ";
				}
				echo "<br><br>";
			?>
			<div style="width:50px; height:50px; background-color:crimson; display:inline-block"></div>
			<div style="width:50px; height:50px; background-color:blue; display:inline-block"></div>
			<div style="width:50px; height:50px; background-color:green; display:inline-block"></div>
			<div style="width:50px; height:50px; background-color:yellow; display:inline-block"></div>
			<div style="width:50px; height:50px; background-color:orange; display:inline-block"></div>
			
	</body>
</html>