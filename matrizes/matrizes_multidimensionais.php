<?php

	$notas = array
	(
	array("carlos", 5.5, 6.0, 7,0),
	array("pedro", 10.0, 10.0, 10,0),
	array("fátima", 2.5, 10.0, 10,0)
	);
	
	// ordem: linha / coluna -> $notas[2][1];
	
	for($linha = 0; $linha < 3; $linha++)
	{
		for($coluna = 0; $coluna < 4; $coluna++)
		{
			echo "{$notas[$linha][$coluna]} <br>"; 		// para fazer entre aspas com matrizes, utilizar chaves {}!
		}
		echo "<br>";
	}
	
	// FOREACH na forma reduzida
	foreach($notas as $vetor)
	{
		foreach($vetor as $dado)
		{
			echo "{$dado} <br>";
		}
		echo "<br>";
	}
	
	/*	recurso de programador */
	
		echo "<pre>";
	 // print_r($notas);
		var_dump($notas);
		echo "</pre>";

	

?>