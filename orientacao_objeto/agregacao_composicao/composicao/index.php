<?php

	require_once "Usuario.class.php";
	require_once "Celular.class.php";
	
	$usuario1 = new Usuario("Kaique", "111.111.111-11", "kaiq@hotmail.com", 14, "991144192");
	
	// setando mais um número caso haja
	$usuario1 -> setCelular(15, "99899292");
	
	/*
	echo "<pre>";
	var_dump($usuario1);
	echo "</pre>";
	*/
	
	echo "<h1>Usuário 1</h1>";
	echo "Nome: {$usuario1 -> getNome()}<br>";
	echo "CPF: {$usuario1 -> getCpf()}<br>";
	echo "E-mail: {$usuario1 -> getEmail()}<br>";
	echo "Celular(es): <br>";
	foreach($usuario1 -> getCelular() as $celular)
	{
		echo "({$celular -> getDdd()})
			  {$celular -> getNumero()} <br>";
	}
?>