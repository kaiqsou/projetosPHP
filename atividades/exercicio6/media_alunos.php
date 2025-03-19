<?php

/*

6. Média de Notas dos Alunos
Armazene as notas de 2 alunos (cada um com 3 notas) e exiba a média de cada um.

*/

$alunos = array
		(
		array("kaique", 10, 10, 10),
		array("xiao", 5, 5, 5)
		);
		
$media = array(0, 0);
		
	echo "Aluno 1: {$alunos[0][0]} <br> Notas: {$alunos[0][1]}, {$alunos[0][2]} e {$alunos[0][3]} <br>";
	echo "Média: ". ($alunos[0][1] + $alunos[0][2] + $alunos[0][3]) / 3 ."<br><br>";
	
	echo "Aluno 2: {$alunos[1][0]} <br> Notas: {$alunos[1][1]}, {$alunos[1][2]} e {$alunos[1][3]} <br>";
	echo "Média: ". ($alunos[1][1] + $alunos[1][2] + $alunos[1][3]) / 3 ."<br><br>";
	
	



?>