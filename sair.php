<?php
	session_start();
	
	unset(// apagar todas variaveis globais
		$_SESSION['usuarioId'],
		$_SESSION['usuarioNome'],
		$_SESSION['nivelAcesso'],
		$_SESSION['usuarioEmail'],
		$_SESSION['usuarioSenha']
	);
	$_SESSION['logindeslogado'] = "Usuário deslogado";
	header("Location: index.php");
?>