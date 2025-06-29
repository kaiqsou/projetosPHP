<?php 

	class Avistamento
	{
		public function __construct
		(
			private int $idAvistamento = 0, 
			private $idanimais = null,
			private string $data_avistamento = "",
			private string $perigo = "",
			private string $local_avistamento = ""
		){}
		
		public function getIdAvistamento()
		{
			return $this -> idAvistamento;
		}
		
		public function getIdAnimais()
		{
			return $this -> idanimais;
		}
		
		public function getData()
		{
			return $this -> data_avistamento;
		}
		
		public function getPerigo()
		{
			return $this -> perigo;
		}
		
		public function getLocal()
		{
			return $this -> local_avistamento;
		}
	}

?>