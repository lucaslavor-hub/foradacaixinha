<?php
	session_start(); // inicia 
?>	
	<h2>Página Aluno</h2>
<?php
	session_start();
	echo "Usuario: ". $_SESSION['usuarioNome'];	//puxa o nome do usuário
	echo "<br>Id: ". $_SESSION['usuarioId']; // puxa o id do usuario
	echo "<br>Nivel Usuario: ". $_SESSION['nivelAcesso']; // puxa o nivel
?>
<br>
<br>
<a href="sair.php">Sair</a>
