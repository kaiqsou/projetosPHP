<?php

	require_once "Pessoa.class.php";
	require_once "Hospede.class.php";
	require_once "Funcionario.class.php";
	require_once "Hotel.class.php";
	require_once "Quarto.class.php";
	require_once "Reserva.class.php";
	
	$pessoa1 = new Pessoa("Gabriel");
	$pessoa2 = new Pessoa("Yasmin");
	
	$hospede1 = new Hospede("251.147.519-31", $pessoa1 -> getNome());
	$funcionario1 = new Funcionario("00458972136", $pessoa2 -> getNome());
	
	$quarto12 = new Quarto(12, 1);
	$quarto19 = new Quarto(19, 2);
	$quarto24 = new Quarto(24, 3);
	
	$hotel = new Hotel("36.829.471/0001-05", "Hotel Habbo", [$quarto12, $quarto19, $quarto24]);
	$reserva = new Reserva("02/05/2025", "07/05/2025", "08/05/2025", $hospede1, $funcionario1, [$quarto12]);

	// eu só não consegui puxar do $reserva os dados do Hotel!
	echo "<strong>HOTEL<br></strong>"; 
	echo "Razão social: {$hotel -> getRazaoSocial()}<br>";
	echo "CNPJ: {$hotel -> getCnpj()}<br>";
	echo "<br>";
	
	echo "<strong>HÓSPEDE<br></strong>"; 
	echo "Nome: {$reserva -> getHospede() -> getNome()}<br>";
	echo "CPF: {$reserva -> getHospede() -> getCpf()}<br>";
	
	echo "<strong><br>QUARTOS<br></strong>";
	foreach($reserva -> getQuarto() as $dado)
	{
		echo "Número: {$dado -> getNumero()}<br>";
		echo "Andar: {$dado -> getAndar()}<br>";
	}
	
	echo "<strong><br>DADOS DA RESERVA<br></strong>";
	echo "Data da Reserva: {$reserva -> getDataReserva()}<br>";
	echo "Data de Entrada: {$reserva -> getDataEntrada()}<br>";
	echo "Data de Saída: {$reserva -> getDataSaida()}<br>";
	
	echo "<strong><br>FUNCIONÁRIO(A) RESPONSÁVEL<br></strong>";
	echo "Nome: {$reserva -> getFuncionario() -> getNome()}<br>";
	echo "Carteira Profissional: {$reserva -> getFuncionario() -> getCarteiraProfissional()}";
	
?>