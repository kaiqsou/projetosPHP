<?php
	if (!isset($_SESSION))
	{
		session_start();
	}
?>

<!DOCTYPE html>
<html>

<head> 
	<title>Loja</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
	<script href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</head>
	
<body> 
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">Navbar</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		
		  <li class="nav-item active">
			<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		  </li>
		  
		  <?php 
			if(isset($_SESSION["tipo"]) && $_SESSION["tipo"] == "Administrador")
			{
				
			echo 
			"
				<li class='nav-item'>
					<a class='nav-link' href='index.php?controle=categoriaController&metodo=listar'>Categoria</a>
				</li>
			  
				<li class='nav-item'>
					<a class='nav-link' href='index.php?controle=produtoController&metodo=listar'>Produto</a>
				</li>
			";
			}
		?>
		
		<?php 
			if(isset($_SESSION["nome"]))
			{
				echo "<li class='nav-item'>
				<a class='nav-link' href='index.php?controle=categoriaController&metodo=login'>Entrar</a>
				</li>";
			}
			else
			{
				echo "<li class='nav-item'>
				<a class='nav-link' href='index.php?controle=produtoController&metodo=logout'>Sair</a>
				</li>";
			}
		?>
		</ul>
		
		<form class="form-inline my-2 my-lg-0">
		  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	  </div>
	</nav>
