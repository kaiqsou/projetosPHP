<?php
	require_once "header.php";
?>
	<div class = "content">
		<div class = "container">
		<br>
			<h1>Avistamento</h1>
			<br>
			<form action="index.php?controle=avistamentoController&metodo=inserir" method="post">
				<label for="data_avistamento">Data do Avistamento:</label>
				<input type="date" name="data_avistamento" id="data_avistamento"><br><br>
				<p style="color: red; font-size: 15px;"><?php echo $msg[0] ?></p>
				
				<label for="local_avistamento">Local do Avistamento:</label>
				<input type="text" name="local_avistamento" id="local_avistamento"><br><br>
				<p style="color: red; font-size: 15px;"><?php echo $msg[1] ?></p>

				<div class="mb-3">
				<label for="animais" class="form-label">Animais:</label>
				<select name="animais" id="animais">
					<option value="0">Escolha um animal</option>
				<?php
				foreach($animais as $dados)
				{
					if(isset($_POST["animais"]) && $_POST["animais"] == $dados -> idanimais)
					{
						echo "<option value='{$dados -> idanimais}' selected>{$dados -> nome}</option>";
					}
					else
					{
						echo "<option value='{$dados->idanimais}'>{$dados->nome}</option>";
					}
				}
					?>
				</select>
				</div>
				<p style="color: red; font-size: 15px;"><?php echo $msg[2] ?></p>
				
				<div class="mb-3">
				<label for="perigo" class="form-label">Perigo:</label>
				<select name="perigo" id="perigo">
					<option value="Não">Não</option>
					<option value="Sim">Sim</option>
				</select>
				</div>
				
				<input type="submit" value="Enviar">
			</form>
		</div>
	</div>
</body>
</html>