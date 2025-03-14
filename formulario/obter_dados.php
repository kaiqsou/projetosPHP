<?php
	if($_GET)
	{
	
		//echo "O nome é " . $_GET ["nome"] . "<br>";  OU
		echo "O nome é {$_GET ["nome"]}<br>";
		echo "O e-mail é {$_GET ["email"]}<br>";
		echo "A profissão é {$_GET ["profissao"]}<br>";
		if(isset($_GET["sexo"]))
		{
			echo "O sexo é {$_GET ["sexo"]}<br>";
		}
		else
		{
			echo "Sexo não foi identificado <br>";
		}
		
		//Verificando o "Lazer"

		echo "Lazer:<br>";
		if(isset($_GET["lazer"]))
		{
			foreach($_GET["lazer"] as $dados)
			{
				echo "$dados<br>";
			}
		}
		else 
		{
			echo "Não pratica lazer! <br>";
		}
		
		if(empty($_GET["observacao"]))
		{
			echo "Não há observação";
		}
		else
		{
			echo "Observação: {$_GET["observacao"]}";
		}
	}	
	
	else
	{
		header("location:index.html");
		die();
	}
?>