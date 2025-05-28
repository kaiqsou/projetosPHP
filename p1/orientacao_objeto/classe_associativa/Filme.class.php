<?php

	class Filme
	{
		public function __construct
		(
			private string $titulo = "",
			private string $duracao = ""
		) {}
		
		public function getTitulo()
		{
			return $this -> titulo;
		}
		
		public function getDuracao()
		{
			return $this -> duracao;
		}
	}

?>