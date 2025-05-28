<?php 

	final class ContaCorrente extends Conta	// 'FINAL' não permite ter filhos / ser extendida
	{
		public function __construct
		(
			private float $limite = 0.00,
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
			if($this -> saldo + $this -> limite >= $valor)	// verifica se o saldo
			{												// está abaixo do valor de saque
				parent :: sacar($valor); // herdando o método do pai
			}
			else
			{
				echo "Saldo insuficiente.<br>";
			}
		}
		
		public function getLimite()
		{
			return $this -> limite;
		}
		
		public function setLimite($aniversario)
		{
			return $this -> limite = $limite;
		}
	}

?>