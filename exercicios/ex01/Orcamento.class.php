<?php

class Orcamento 
{
	public function __construct
	(
		private string data_orcamento = "",
		private float preco = "",
		private string data_validade = "",
		private $aparelho = null,
		private $tecnico = null
	) {}
		
	public function getDataOrcamento()
	{
		$this -> dataOrcamento; // precisa estar igual?
	}
	
	public function getPreco()
	{
		$this -> preco;
	}
	
	public function getDataValidade()
	{
		$this -> dataValidade;
	}
	
	public function getAparelho()
	{
		$this -> aparelho;
	}
	
	public function getTecnico()
	{
		$this -> tecnico;
	}
}

?>