<?php

	date_default_timezone_set("America/Sao_Paulo");
	require_once "Pessoa.class.php";
	require_once "Telefone.class.php";
	require_once "Cliente.class.php";
	require_once "Contratado.class.php";
	require_once "Festa.class.php";
	require_once "Decoracao.class.php";
	
	$cliente = new Cliente("051.214.541-00", "Kaique", 14, "9124-5474");
	$contratado = new Contratado("111455685-00/00", "Marina", 14, "9155-4178");
	$decoracao = new Decoracao("Natal");
	$festa = new Festa(date("d/m/Y"), "25/12/2025", 199.99, $decoracao, $contratado, $cliente);
	
	$contratado -> setFesta($festa);
	
	echo "<h1>FESTA</h1>";
	echo "Data do Contrato: {$festa -> getDataContrato()}<br>";
	echo "Data da Festa: {$festa -> getDataFesta()}<br>";
	echo "Valor da Festa: {$festa -> getValor()}<br>";
	echo "Decoração: {$festa -> getDecoracao() -> getDescritivo()}";
	
	$cliente -> setTelefone(14, "9154-5874");
	
	echo "<h1>CLIENTE</h1>";
	echo "Nome: {$festa -> getCliente() -> getNome()}<br>";
	echo "CPF: {$festa -> getCliente() -> getCpf()}<br>";
	echo "Telefone(s): <br>";
	foreach($festa -> getCliente() -> getTelefone() as $telefone)
	{
		echo "({$telefone -> getDdd()}) 
		{$telefone -> getNumero()}<br>";
	}
	
	echo "<h1>CONTRATADO</h1>";
	echo "Nome: {$festa -> getContratado() -> getNome()}<br>";
	echo "CPF: {$festa -> getContratado() -> getCnpj()}<br>";
	echo "Telefone(s): <br>";
	foreach($festa -> getContratado() -> getTelefone() as $telefone)
	{
		echo "({$telefone -> getDdd()}) 
		{$telefone -> getNumero()}<br>";
	}

?>