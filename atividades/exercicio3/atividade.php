<?php

/* 3. Ordenação Manual de um Vetor
   Crie um vetor de 3 números e ordene-os manualmente (sem usar sort()), comparando e trocando os valores, se necessário.
*/

	$numeros = array(5, 2, 1);
	$valorSalvo = 0;
	
	echo "Números: ";
	
	for($i = 0; $i < 3; $i++)
	{
		echo "$numeros[$i] ";
	}
	
	echo "<br> Ordenados: ";
	

	if($numeros[0] >= $numeros[1])
	{
		$valorSalvo = $numeros[0];
		$numeros[0] = $numeros[1];
		$numeros[1] = $valorSalvo;
	}
	
	if($numeros[0] >= $numeros[2])
	{
		$valorSalvo = $numeros[0];
		$numeros[0] = $numeros[2];
		$numeros[2] = $valorSalvo;
	}
	
	if($numeros[1] >= $numeros[2])
	{
		$valorSalvo = $numeros[1];
		$numeros[1] = $numeros[2];
		$numeros[2] = $valorSalvo;
	}
	
	for($i = 0; $i < 3; $i++)
	{
		echo "$numeros[$i] ";
	}

?>

