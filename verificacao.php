<?php
	session_start();	
	include_once("conectandobanco.php"); // inclui no conectandobanco	
	
	if((isset($_POST['email'])) && (isset($_POST['senha']))){//Se tiver com conteudo no email e na senha
	   
		$usuario = mysqli_real_escape_string($conecta, $_POST['email']); 
		// filtrar caracteres  
		$senha = mysqli_real_escape_string($conecta, $_POST['senha']); 
		// filtrar caracteres  
		$senha = md5($senha);
		// md5 criptografia da senha
		$result_usuario = "SELECT * FROM usuarios WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
		// busca no banco de dados

		$resultado_usuario = mysqli_query($conecta, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
		if(isset($resultado)){
			$_SESSION['usuarioId'] = $resultado['id'];
			$_SESSION['usuarioNome'] = $resultado['nome'];
			$_SESSION['nivelAcesso'] = $resultado['nivel'];
			$_SESSION['usuarioEmail'] = $resultado['email'];
		// compara pra ver se cada um ta certo para da o acesso.			
			// definir cada nivel
			if($_SESSION['nivelAcesso'] == "1"){
				header("Location: professor.php");
			}else{
				header("Location: aluno.php");
			}
		}else{	
			//mensagem de erro
			$_SESSION['msg_de_erro'] = "Erro Login";// variavel global
			header("Location: index.php");
		}
	//mensagem de erro
	}else{
		$_SESSION['msg_de_erro'] = "Erro Login";// variavel global
		header("Location: index.php");
	}
?>