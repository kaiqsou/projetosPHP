<?php
	// abstract não permite instâncias (objetos) da classe
	abstract class Conexao
	{
		// se o parâmetro for PDO, é preciso informar o Banco de Dados
		
		public function __construct(protected $db = null)
		{
			$parametro = "mysql:host=localhost;dbname=pets";
			// a classe PDO vem junto com o PhP
			$this -> db = new PDO($parametro, "root", "");
		}
	}
?>