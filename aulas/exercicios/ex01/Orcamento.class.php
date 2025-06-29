<?php

class Orcamento 
{
	public function __construct
	(
		private string $data_orcamento = "",
		private float $preco = 0.00,
		private string $data_validade = "",
		private $aparelho = null,
		private $tecnico = null
	) {}
	
	// métodos GET
	public function getDataOrcamento()
	{
		return $this -> data_orcamento;
	}
	
	public function getPreco()
	{
		return $this -> preco;
	}
	
	public function getDataValidade()
	{
		return $this -> data_validade;
	}
	
	public function getAparelho()
	{
		return $this -> aparelho;
	}
	
	public function getTecnico()
	{
		return $this -> tecnico;
	}
	
	// métodos SET
	public function setDataOrcamento($data_orcamento)
	{
		$this -> data_orcamento = $data_orcamento;
	}
	
	public function setPreco($preco)
	{
		$this -> preco = $preco;
	}
	
	public function setDataValidade($data_validade)
	{
		$this -> data_validade = $data_validade;
	}
	
	public function setAparelho($aparelho)
	{
		$this -> aparelho = $aparelho;
	}
	
	public function setTecnico($tecnico)
	{
		$this -> tecnico = $tecnico;
	}
}

?>