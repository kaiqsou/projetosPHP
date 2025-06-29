<?php
	require_once "Models/Conexao.class.php";
	require_once "Models/usuarioDAO.class.php";
	require_once "Models/Usuarios.class.php";
	if(!isset($_SESSION))
	{
		session_start();
	}
	class usuarioController
	{
		public function login()
		{
			if($_POST)
			{
				$usuario = new Usuarios(email:$_POST["email"], senha:$_POST["senha"]);
				
				$usuarioDAO = new usuarioDAO();
				
				$retorno = $usuarioDAO->autenticacao($usuario);
				//var_dump($retorno);
				if(count($retorno) > 0)
				{
					
					//encontrou e vai verificar a password
					if(password_verify($_POST['senha'], $retorno[0]->senha))
					{
					
						echo "Login efetuado com sucesso";
									
						$_SESSION["nome"] = $retorno[0]->nome;
						$_SESSION["tipo"] = $retorno[0]->tipo;
						header("location:/loja");
						//die();
					}
				}	
					//não encontrou o usuário
					echo "Problema nas crendenciais";
				
				
			}
			require_once "Views/login.php";
		}//fim login
		public function logout()
		{
			
			$_SESSION = array();
			session_destroy();
			header("location:/loja");
			die();
			
		}
		public function inserir()
		{
			$msg = array("","","","","");
			$erro = false;
			if($_POST)
			{
				if(empty($_POST["nome"]))
				{
					$msg[0] = "Preencha o seu nome";
					$erro = true;
				}
				if(empty($_POST["email"]))
				{
					$msg[1] = "Preencha o seu e-mail";
					$erro = true;
				}
				else
				{
					$usuario = new Usuarios(email:$_POST["email"]);
					$usuarioDAO = new UsuarioDAO();
					$retorno = $usuarioDAO->autenticacao($usuario);
					
					if(count($retorno) > 0)
					{
						$msg[1] = "E-mail já cadastrado";
						$erro = true;
					}
				}
				if(empty($_POST["senha"]))
				{
					$msg[2] = "Preencha a senha";
					$erro = true;
				}
				if(empty($_POST["confirma"]))
				{
					$msg[3] = "Confirme a senha";
					$erro = true;
				}
				if($_POST["senha"]!= "" && $_POST["confirma"] != "")
				{
					if($_POST["senha"] != $_POST["confirma"])
					{
						$msg[3] = "Senhas não conferem";
						$erro = true;
					}
				}
				if(!$erro)
				{
					
					$usuario = new Usuarios(nome:$_POST["nome"], email:$_POST["email"], senha:password_hash($_POST["senha"], PASSWORD_DEFAULT), tipo:"Cliente");
					$usuarioDAO = new UsuarioDAO();
					$usuarioDAO->inserir($usuario);
					$msg[4] = "Inserido com sucesso";
				}
			}
			require_once "views/form_usuario.php";
		}
	}//fim da classe
?>