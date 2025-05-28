<?php 
	// classe abstrata não permite criação de objetos a partir dela
	abstract class Conta 
	{
		public function __construct
		(
		 // public = acessa de qualquer local
		 // private = acessa apenas a classe
		 /* protected = usado apenas na classe genérica de uma herança, 
			tornando possível apenas as classes filhas acessarem/mexerem 
			nos atributos da classe pai*/
			protected string $agencia = "",
			protected string $conta = "",
			protected float $saldo = 00.00,			
		){}
		
		// método de saque principal
		public function sacar($valor)
		{
			$this -> saldo = $this -> saldo - $valor;		// tirar do saldo a quantia do $valor
		}
		
		// métodos agência
		
		public function getAgencia()
		{
			return $this -> agencia;
		}
		
		public function setAgencia($agencia)
		{
			$this -> agencia = $agencia;
		}
		
		// métodos conta
		
		public function getConta()
		{
			return $this -> conta;
		}
		
		public function setConta($conta)
		{
			$this -> conta = $conta;
		}
		
		// métodos saldo
		
		public function getSaldo()
		{
			return $this -> saldo;
		}
		
		public function setSaldo($saldo)
		{
			$this -> saldo = $saldo;
		}
	}

?>