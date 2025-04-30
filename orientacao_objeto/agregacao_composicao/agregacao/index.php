<?php
	require_once "Produto.class.php";
	require_once "Categoria.class.php";
	
	$categoria1 = new Categoria("Material Escolar");
	$categoria2 = new Categoria("Material dde Escritório");
	
	$produto1 = new Produto("Lápis Preto", 2.50, array($categoria1));
	$produto2 = new Produto("Caderno Brochura", 10, array($categoria1));
	
	$produto1->setCategoria($categoria2);
	
	
	/*echo"<pre>";
	var_dump($produto1);
	echo"</pre>";
	
	echo"<pre>";
	var_dump($produto2);
	echo"</pre>";*/
	
	echo"<h1>Produto 1</h1>";
	echo"Nome: {produto1->getNome()}<br><br>";
	echo"Preço: {produto1->getPreco()}<br><br>";
	echo"Categoria(s)<br>";
	foreach($produto1->getCategoria() as $categoria)
	{
		echo "Descritivo:
		{$categoria->getDescritivo()}<br>";
	}
?>