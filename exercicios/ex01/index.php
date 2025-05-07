<?php

	require_once "Telefone.class.php";
	require_once "Pessoa.class.php";
	require_once "Cliente.class.php";
	require_once "Tecnico.class.php";
	require_once "Aparelho.class.php";
	require_once "Modelo.class.php";
	require_once "Orcamento.class.php";
	
	$telefone1 = new Telefone(14, "991144192");
	$telefone2 = new Telefone(16, "991345962");
	
	$pessoa1 = new Pessoa("Kaique", $telefone1);
	$pessoa2 = new Pessoa("Marina", $telefone2);
	
	$modelo1 = new Modelo("iPhone");
	$modelo2 = new Modelo("Samsung");
	
	$cliente = new Cliente("061.121.031-02", $pessoa1 -> getNome());
	$aparelho = new Aparelho("Celular de 64GB com defeito", $modelo1, $cliente);
	$tecnico = new Tecnico("Celulares", $pessoa2 -> getNome());
	$orcamento = new Orcamento("06/05/2025", 135.12, "12/05/2025", $aparelho, $tecnico);
	
	echo "<strong>Cliente:</strong> {$orcamento -> getAparelho() -> getCliente() -> getNome()}<br>";
	echo "<strong>Data do Orçamento:</strong> {$orcamento -> getDataOrcamento()}<br>";
	echo "<strong>Data de Validade:</strong> {$orcamento -> getDataValidade()} <br>";
	echo "<strong>Preço:</strong> {$orcamento -> getPreco()}<br>";
	echo "<strong>Modelo do Aparelho:</strong> {$orcamento -> getAparelho() -> getModelo() -> getDescritivo()}<br>";
	echo "<strong>Descrição:</strong> {$orcamento -> getAparelho() -> getDescritivo()} <br>";
	echo "<br>";
	echo "<strong>Técnico(a) responsável:</strong> {$orcamento -> getTecnico() -> getNome()}<br>";
	echo "<strong>Especialidade:</strong> {$orcamento -> getTecnico() -> getEspecialidade()}";
	
?>