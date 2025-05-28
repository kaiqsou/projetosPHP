<?php

/* 2. Somar Elementos de um Vetor
   Crie um vetor com 5 números inteiros e some manualmente os valores acessando cada índice diretamente. 
*/

	$numeros = array(1, 2, 3, 4, 5);
	$soma = 0;
	$enumerador = 0;
	
	for ($i = 0; $i < 5; $i++)
	{
		$soma += $numeros[$i];
		$enumerador = $i + 1;
		echo "$enumerador"."º número: $numeros[$i] <br>";
	}
	
	echo "Somando os números $numeros[0], $numeros[1], $numeros[2], $numeros[3] e $numeros[4] teremos: $soma"

?>