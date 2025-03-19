<?php

	class Cliente
	{
		public string $nome;
		public string $cpf;
		public string $celular;
	}

	$cliente1 = new Cliente();
	$cliente1->nome = "Kaique";		// atribuindo nome ao elemento "nome" do cliente1
	$cliente1->cpf = "054.756.147-00";
	$cliente1->celular = "(14) 9114-4192";
	
	$cliente2 = new Cliente();
	$cliente2->nome = "Marina";		// atribuindo nome ao elemento "nome" do cliente1
	$cliente2->cpf = "214.478.466-92";
	$cliente2->celular = "(14) 9123-4072";
	
	echo "<pre>";
	var_dump($cliente1);
	echo "</pre>";
	
	echo "<pre>";
	var_dump($cliente2);
	echo "</pre>";
?>