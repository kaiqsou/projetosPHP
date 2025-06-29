<?php

	$pessoa = array("Maria", 25, 1.69, 47.8, true);
	
	// usando FOR
	for($x = 0; $x < count($pessoa); $x++)
	{
		echo "$pessoa[$x] <br>";
	}
	
	echo "<br><br>";
	
	// usando FOREACH na forma reduzida
	foreach($pessoa as $dado)
	{
		echo "$dado<br>";
	}
	
	echo "<br><br>";
	
	// usando FOREACH na forma completa
	foreach($pessoa as $indice => $dado)
	{
		echo "$indice: $dado <br>";
	}
	
	echo "<br><br>";
	
	// colocando mais um item na matriz
	$pessoa[] = "Castanho";

	foreach($pessoa as $indice => $dado)
	{
		echo "$indice: $dado <br>";
	}
?>