<?php
	require_once "Produto.class.php";
	require_once "Fornecedor.class.php";
	
	// por ser fortemente tipado, é obrigatório inicializar o produto aqui
	$fornecedor1 = new Fornecedor("111.111.111/0001-11", "Faber Castell", new Produto());
	
	$produto1 = new Produto("Lápis Preto", "Lápis Preto Nº2", 3.5, [$fornecedor1]);
	
	$fornecedor2 = new Fornecedor("222.222.222/1112-22", "Pilot", new Produto());
	
	$produto1 -> setFornecedor($fornecedor2); // acrescentando o fornecedor 2 ao produto 1
	
	/* 
	echo "<pre>";
	var_dump($produto1);
	echo "</pre>";
	*/
	
	echo "Nome: {$produto1 -> getNome()}<br>";
	echo "Descrição: {$produto1 -> getDescricao()}<br>";
	echo "Preço: ".number_format($produto1 -> getPreco(), 2, ",", "."). "<br>";
	echo "Fornecedores<br>";
	foreach($produto1 -> getFornecedor() as $dado)
	{
		echo "CNPJ: {$dado -> getCnpj()}<br>";
		echo "Razão Social: {$dado -> getRazaoSocial()}<br>";
	}
	
	$produto2 = new Produto("Caneta Azul", "Caneta Azul Nº37", 4.50);
	// associando o produto2 ao fornecedor3
	$fornecedor3 = new Fornecedor("333.333.333/2223-33", "Bic", $produto2);
	
	echo "CNPJ: {$fornecedor3 -> getCnpj()}<br>";
	echo "Razão Social: {$fornecedor3 -> getRazaoSocial()}<br>";
	echo "<br>Produto<br>";		// objeto		// devolver o nome, que é privado
	echo "Nome: {$fornecedor3 -> getProduto()-> getNome()}<br>"; 
	echo "Descrição: {$fornecedor3 -> getProduto()-> getDescricao()}<br>"; 
	echo "Preço: {$fornecedor3 -> getProduto()-> getPreco()}<br>"; 
	
?>