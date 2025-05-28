<?php

/*  10. Criar uma Agenda Simples
	Crie uma matriz nomeada para armazenar 3 contatos (nome, telefone e e-mail) e exiba os dados acessando os índices diretamente.
*/

	$contatos = array
	(
		array
		(
		"nome" => "Kaique", 
		"telefone" => "(14) 9114-4192", 
		"email" => "kaique@hotmail.com"
		),
		array
		(
		"nome" => "Marina", 
		"telefone" => "(14) 9147-8681", 
		"email" => "marina@hotmail.com"
		),
		array
		(
		"nome" => "Tamires", 
		"telefone" => "(14) 9123-6523", 
		"email" => "tamires@hotmail.com"
		)
	);
	
	foreach($contatos as $indice => $dados)
	{
		echo "Contato ".($indice+1)."<br>";
		echo "Nome: ". $dados["nome"]."<br>";
		echo "Telefone: ". $dados["telefone"]."<br>";
		echo "E-mail: ". $dados["email"]."<br><br>";
	}

?>