<?php

class Modelo 
{
	public function __construct
	(
		private string descritivo = ""
	)
	
	public function getDescritivo()
	{
		return $this -> descritivo;
	}
}

?>