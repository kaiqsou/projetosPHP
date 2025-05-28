<?php

	date_default_timezone_set("America/Sao_Paulo");
	require_once "Pessoa.class.php";
	require_once "Hospede.class.php";
	require_once "Funcionario.class.php";
	require_once "Hotel.class.php";
	require_once "Quartos.class.php";
	require_once "Reserva.class.php";
	
	$hospede = new Hospede("024.657.145-03", "Kaique");
	$funcionario = new Funcionario("00234567", "Marina");
	
	$hotel_h = new Hotel("12.345.678/0001-95", "Hotel Habbo");
	$quarto11 = new Quartos(11, 1, $hotel_h);
	$quarto15 = new Quartos(15, 2, $hotel_h);
	$quarto19 = new Quartos(19, 2, $hotel_h);

	$hotel_h -> setQuartos($quarto11, $quarto15);
	
	$reservaK = new Reserva(date("d/m/Y"), "21/05/2025", "26/05/2025", $hospede, $funcionario, [$quarto11, $quarto15]);
	
	$hospede -> setReserva($reservaK);
	$quarto11 -> setReserva($reservaK);
	$quarto15 -> setReserva($reservaK);
	
	echo "<strong><h2>RESERVA</h2></strong>"; 
	echo "Data da Reserva: {$reservaK -> getDataReserva()}<br>";
	echo "Data de Entrada: {$reservaK -> getDataEntrada()}<br>";
	echo "Data de Saída: {$reservaK -> getDataSaida()}<br>";
	
	echo "<strong><h3>HÓSPEDE</h3></strong>"; 
	echo "Nome: {$reservaK -> getHospede() -> getNome()}<br>";
	echo "CNPJ: {$reservaK -> getHospede() -> getCpf()}<br>";
	
	echo "<strong><h3>QUARTOS</h3></strong>";
	foreach ($reservaK -> getQuartos() as $quarto)
	{
		echo "Andar: {$quarto -> getAndar()}<br>";
		echo "Número: {$quarto -> getNumero()}<br>";
		echo "Hotel: {$quarto -> getHotel() -> getRazaoSocial()}<br>";
		echo "CNPJ: {$quarto -> getHotel() -> getCnpj()}<br><br>";
	}
	
	echo "<strong><h3>FUNCIONÁRIO(A)</h3></strong>";
	echo "Nome: {$reservaK -> getFuncionario() -> getNome()}<br>";
	echo "Carteira Profissional: {$reservaK -> getFuncionario() -> getCarteiraProfissional()}<br>";
	echo "<br>";
	
	
?>