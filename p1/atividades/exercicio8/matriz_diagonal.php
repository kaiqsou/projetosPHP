<?php

	/*
	
	8. Exibir a Diagonal Principal de uma Matriz 3x3
	   Crie uma matriz 3x3 fixa e exiba apenas os números da diagonal principal (onde o índice da linha é igual ao da coluna).
	
	*/

	$diagonal = array
	(
		array("Kaique", 21, 2004),
		array ("Marina", 19, 2003),
		array ("Tamires", 30, 1995)
	);
	
	for($linha = 0; $linha <= 2; $linha++)
	{
		for($coluna = 0; $coluna <= 2; $coluna++)
		{
			echo "{$diagonal[$linha][$coluna]} ";
		}
		echo "<br>";
	}
	
	echo "<br> Diagonal principal: {$diagonal[0][0]}, {$diagonal[1][1]} e {$diagonal[2][2]}"
?>