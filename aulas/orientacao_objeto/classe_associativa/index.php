<?php

	require_once "Ator.class.php";
	require_once "Filme.class.php";
	require_once "Atuacao.class.php";
	
	$ator1 = new Ator("Leonardo", "Americano");
	$filme1 = new Filme("Titanic", "2 horas");
	$filme2 = new Filme("Ilha do Medo", "2 horas e 50 minutos");
	$atuacao1 = new Atuacao("Jack", $filme1, $ator1);
	
	// Acessa Atuação 1 -> Pega o objeto FILME -> Pega o TÍTULO dentro
	echo "Filme: {$atuacao1 -> getFilme() -> getTitulo()}<br>";
	echo "Duração: {$atuacao1 -> getFilme() -> getDuracao()}<br>";
	
	echo "Ator: {$atuacao1 -> getAtor() -> getNome()}<br>";
	echo "Nacionalidade: {$atuacao1 -> getAtor() -> getNacionalidade()}<br>";
	echo "Papel: {$atuacao1 -> getPapel()}<br>";
?>