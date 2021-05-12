<?php
	$servidor = "localhost";
	$usuario = "nome";
	$senha = "senha";
	$dbname = "x";
	$conecta = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conecta){
		die("Erro: " . mysqli_connect_error());
	}else{

	}	
	
?>
