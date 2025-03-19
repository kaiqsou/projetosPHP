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
	
    /*
	if($numeros[0] >= $numeros[1])
	{
		$valorSalvo = $numeros[0];	// salvando o valor do $numeros[0]
		$numeros[0] = $numeros[1]; // invertendo
		$numeros[1] = $valorSalvo; // comparando o $numeros[1] com o valor antigo do $numeros[0] que está salvo na nova variavel
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
	
	
	
	outra resolução
	*/
	for($x = 0; $x < count($numeros); $x++)
	{
		for($y = 0; $y < count ($numeros) - 1; $y++)
		{
			if ($numeros[$y] > $numeros[$y + 1])	// para fazer ordem crescente usar > e para decrescente usar <
			{
				$valorSalvo = $numeros[$y];
				$numeros[$y] = $numeros[$y+1];
				$numeros[$y+1] = $valorSalvo;
			}
		}
	}
	
	
	for($i = 0; $i < 3; $i++)
	{
		echo "$numeros[$i] ";
	}

?>

