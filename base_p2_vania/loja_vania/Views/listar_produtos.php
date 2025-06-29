<?php
	
	require_once "cabecalho.php";
?>
	<div class="content">
	  <div class="container">
	  <?php
			if(isset($_GET["msg"]))
			{
				echo "<div class='alert alert-success' role='alert'>{$_GET['msg']}</div>";
			}
	 ?>
	  
		<br><br><h1 class="row justify-content-center align-items-center">Produtos</h1><br>
		<br>
		<a  class="btn btn-success" href="/loja/inserirProduto">Novo produto</a>
		<table class="table table-striped">
			<tr>
				<th>Nome</th>
				<th>Preço</th>
				<th>Estoque</th>
				<th>Categoria</th>
				<th>Imagem</th>
				<th>Situação</th>
				<th>Ações</th>
			</tr>
			<?php
				
				
				foreach($retorno as $dados)
				{
					$preco = number_format($dados->preco,2,",",".");
					
					echo "<tr>
					      <td>{$dados->nome}</td>
						  <td>$preco</td>
						  <td>{$dados->estoque}</td>
						  <td>{$dados->descritivo}</td>
						  <td><img style='width:100px;height:100px;' src='produtos/{$dados->imagem}'></td>
						  <td>{$dados->situacao}</td>
						  <td>
						  
						  <a href='/loja/alterar/{$dados->id_produto}' class='btn btn-warning'>Alterar</a>
						  
						  &nbsp;&nbsp;";
						if($dados->situacao == "Ativo")
						{
							echo "<a class='btn btn-danger' href='/loja/situacao/{$dados->id_produto}/Inativo'>Inativar</a>";
						}
						else
						{
							echo "<a class='btn btn-danger' href='/loja/situacao/{$dados->id_produto}/Ativo'>Ativar</a>";
						}
							
						  
						  
						echo "</td>
						 </tr>"; 
						  
				}
				
				
			?>
		</table>
		
		
	</div>
</div>
</body>
</html>