<?php
	require_once "Cliente.class.php";
	
	// com construtor codificado é obrigatório passar os parâmetros
	$cliente1 = new Cliente("Kaike", "054.756.147-00", "(14) 9114-4192");
	echo "Valor antigo: {$cliente1 -> getNome()}<br>";	// coletando o nome antigo
	$cliente1 -> setNome("Kaique");						// atualizando o nome
	echo "Valor novo:"." ".$cliente1 -> getNome();		// exibindo atualização
	
	$cliente2 = new Cliente("Marina", "214.478.466-92", "(14) 9123-4072");
	
	$cliente3 = new Cliente();
	
	$cliente4 = new Cliente(celular: "(14) 9127-6172");	// atribuindo valor apenas ao celular
	
	echo "<pre>";
	var_dump($cliente1);
	echo "</pre>";
	
	echo "<pre>";
	var_dump($cliente2);
	echo "</pre>";
	
	echo "<pre>";
	var_dump($cliente3);
	echo "</pre>";
	
	echo "<pre>";
	var_dump($cliente4);
	echo "</pre>";

?>