<?php 
 // require da classe pai deve vir antes do required da classe filha
	require_once "Conta.class.php";
	require_once "contaPoupanca.class.php";
	require_once "contaCorrente.class.php";
	
	$poupanca = new contaPoupanca(1, "123-4", "3456-7", 1000);
	$corrente = new contaCorrente(3000, "235-9", "76849-2", 5000);
	
	/*
	echo "<pre>";
	var_dump($poupanca);
	echo "<pre>";
	*/
	
	/*  
		classe abstrata não permite criação de objetos a partir dela
		$conta = new Conta(12, "123-4", "3456-7", 1000)
	*/
	
	echo "<h3>Poupança</h3>";
	$poupanca -> sacar(514);
	echo "Saldo: {$poupanca -> getSaldo()}<br><br>";
	
	echo "<h3>Corrente</h3>";
	$corrente -> sacar(8001);
	echo "Saldo: {$corrente -> getSaldo()}<br><br>";
	
?>