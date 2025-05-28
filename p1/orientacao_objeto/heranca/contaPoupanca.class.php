<?php 

	class ContaPoupanca extends Conta // Isso diz que é uma extensão da classe CONTA(pai)
	{
		public function __construct
		(
			private int $aniversario = 0,
					string $agencia,// não é private por não ser atributo próprio da classe,
					string $conta,	// mas sim um parâmetro para enviar 
					float $saldo	// para classe pai na herança 
					
		)
		{
			parent :: __construct($agencia, $conta, $saldo); // pegando os valores do pai (parent)
		}
		
		// método de saque herdado do pai e com polimorfismo (outra forma)
		public function sacar($valor)
		{
			// o explode separa os conteúdos entre as "/" em array, com indices separados
			$data = explode("/", date("Y/m/d"));
			if ($data[2] > $this -> aniversario && $this -> saldo >= $valor)
			{
				parent :: sacar($valor);
			}
			else
			{
				echo "Problema no saque.<br>";
			}
		}
		
		public function getAniversario()
		{
			return $this -> aniversario;
		}
		
		public function setAniversario($aniversario)
		{
			return $this -> aniversario = $aniversario;
		}
	}

?>