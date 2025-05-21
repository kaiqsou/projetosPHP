<?php

	// se for tipado, a ordem do require é importante

	date_default_timezone_set("America/Sao_Paulo");
	require_once "Pessoa.class.php";
	require_once "Cliente.class.php";
	require_once "Tecnico.class.php";
	require_once "Aparelho.class.php";
	require_once "Modelo.class.php";
	require_once "Orcamento.class.php";
	require_once "Telefone.class.php";
	
	$modelo = new Modelo("Motorola 4444");
	$cliente = new Cliente("093.411.091-01", "Kaique", 14, "91144192");
	$aparelho = new Aparelho("Celular", $modelo, $cliente);
	$tecnico = new Tecnico("Conserto de celulares", array(), "Marina", 14, "91255769");
	$tecnico -> setTelefone(14, "32334455");
	$orcamento = new Orcamento(date("d/m/Y"), 150.60, "20/05/2025", $aparelho, $tecnico);
	
	echo "<h1>Orçamento</h1>";
	
	echo "Data do Orçamento: 
	{$orcamento -> getDataOrcamento()} <br>";
	
	echo "Data de Validade: 
	{$orcamento -> getDataValidade()} <br>";
	
	echo "Preço: R$ ".
	number_format($orcamento -> getPreco(), 2, ",", ".")."<br>";
	
	echo "<h2>Aparelho</h2>";
	
	echo "Aparelho: 
	{$orcamento -> getAparelho() -> getDescritivo()}<br>";
	
	echo "Modelo: 
	{$orcamento -> getAparelho() -> getModelo() -> getDescritivo()}<br>";
	
	echo "<h3>Cliente</h3>";
	
	echo "Nome: 
	{$orcamento -> getAparelho() -> getCliente() -> getNome()}<br>";
	
	echo "CPF: 
	{$orcamento -> getAparelho() -> getCliente() -> getCpf()}<br>";
	
	foreach($orcamento -> getAparelho() -> getCliente() -> getTelefone()
	as $telefone)
	{
		echo "({$telefone -> getDdd()}) 
		{$telefone -> getNumero()}<br>";
	}
	
	echo "<h4>Técnico</h4>";
	echo "Nome: 
	{$orcamento -> getTecnico() -> getNome()}<br>";
	
	echo "Especialidade: 
	{$orcamento -> getTecnico() -> getEspecialidade()}<br>";
	
	echo "Telefone(s): ";
	foreach($orcamento -> getTecnico() -> getTelefone()
	as $telefone)
	{
		echo "<br>({$telefone -> getDdd()}) 
		{$telefone -> getNumero()}";
	}
	
?>