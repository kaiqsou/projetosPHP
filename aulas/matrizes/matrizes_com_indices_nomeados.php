<?php
	// obs: com índice nomeado, não é possivel usar o FOR
	$pessoa = array
	(
	"nome" => "Maria", 
	"idade" => 25, 
	"altura" => 1.69, 
	"peso" => 47.8, 
	"casado" => true
	);
	
	foreach($pessoa as $indice => $dado)
	{
		echo "$indice - $dado <br>";
	}
	
?>