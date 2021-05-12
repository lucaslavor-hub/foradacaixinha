<?php
	$servidor = "localhost";
	$usuario = "foradaca_banco";
	$senha = ")?ljW1k&O+GS";
	$dbname = "foradaca_banco";
	$conecta = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conecta){
		die("Erro: " . mysqli_connect_error());
	}else{

	}	
	
?>