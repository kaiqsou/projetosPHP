<?php
	require_once "models/Conexao.class.php";
	require_once "models/UsuarioDAO.class.php";
	require_once "models/Usuarios.class.php";

	class usuarioController
	{
		public function login()
		{
			if ($_POST)
			{
				$usuario = new Usuarios(email:$_POST["email"], senha:$_POST["senha"]);
				
				// instância do usuarioDAO, inclui o método autenticação
				$usuarioDAO = new usuarioDAO();
				$retorno = $usuarioDAO -> autenticacao($usuario);
				
				if(count($retorno) > 0)
				{
					// encontrou o usuário
					echo "Login efetuado com sucesso.";
					
					session_start();
					// salvando dados na sessão
					$_SESSION["nome"] = $retorno[0] -> nome;
					$_SESSION["tipo"] = $retorno[0] -> tipo;
				}
				else 
				{
					// não encontrou o usuário
					echo "Problema nas suas credenciais.";
				}
			}
			require_once "views/login.php";
		}
	}

?>