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
					
					// salvando dados na sessão
					$_SESSION["nome"] = $retorno[0] -> nome;
					$_SESSION["tipo"] = $retorno[0] -> tipo;
					
					header("location: index.php");
					die();
				}
				else 
				{
					// não encontrou o usuário
					echo "Problema nas suas credenciais.";
				}
			}
			require_once "views/login.php";
		}
		
		public function logout()
		{
			if (!isset($_SESSION))
			{
				session_start();
			}
			
			$_SESSION = array(); // pega toda a sessão num array 
			session_destroy(); // destrói toda a sessão
			header("location: index.php"); // redireciona após logout
			die();
		}
	}

?>