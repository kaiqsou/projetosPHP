<?php
	require_once "header.php";
	
	if(isset($_GET["msg"]))
	{
		echo "<h3>{$_GET["msg"]}</h3>";
	}
?>
	<div class="content">
	<div class="container">
		<br><br><h1>Lista de Avistamentos</h1><br>
		<table class="table table-striped">
			<tr>
				<th>Data</th>
				<th>Perigo</th>
				<th>Local</th>
				<th>Id do Animal</th>
				<th>Nome do Animal</th>
				<th>Espécie</th>
			</tr>
			<?php	
				foreach($avistamentos as $dados)
				{
					echo "<tr>
							<td>{$dados -> data_avistamento}</td>
							<td>{$dados -> perigo}</td>
							<td>{$dados -> local_avistamento}</td>
							<td>{$dados -> idanimais}</td>
							<td>{$dados -> nome}</td>
							<td>{$dados -> especie}</td>";
						"</tr>";
				}//fim do foreach
			?>
		</table><br><br>
		
		<br><br><h1>Lista de Animais</h1><br>
		<table class="table table-striped">
			<tr>
				<th>Nome</th>
				<th>Espécie</th>
			</tr>
			<?php	
				foreach($animais as $dados)
				{
					echo "<tr>
							<td>{$dados -> nome}</td>
							<td>{$dados -> especie}</td>
						</tr>";
				}
			?>
		</table>
		<br><a href="index.php?controle=avistamentoController&metodo=inserir" class="btn btn-success">Novo Avistamento</a>
	</div>
</div>