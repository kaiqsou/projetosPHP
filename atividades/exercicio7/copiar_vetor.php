<?php 

/* 
		7. Copiar os Elementos de um Vetor para Outro
		Crie um vetor com 4 números e copie cada valor manualmente para um segundo vetor.
		
		
*/

	$numeros = array(4, 7, 3, 1);
	$segundoVetor = array(0, 0, 0, 0);
	
	echo "Vetor 1: ";
	foreach($numeros as $dados)
	{
		echo "$dados ";
	}
	echo "<br>";
	
	for ($i = 0; $i <= 3; $i++)
	{
		$segundoVetor[$i] = $numeros[$i];
	}
	
	echo "Vetor 2: ";
	foreach($segundoVetor as $dados)
	{
		echo "$dados ";
	}


?>