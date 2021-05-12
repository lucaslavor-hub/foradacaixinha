<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
  </head>

  <body>
<center>
    <div class="container">
      <h2>Login</h2>
      <form method="POST" action="verificacao.php">
        <br>
        <label for="inputEmail">Email</label>
        <input type="email" name="email" id="inputEmail" placeholder="Email" required autofocus>
        <br>
        <br>
        <br>
        <label for="inputPassword" >Senha</label>
        <input type="password" name="senha" id="inputPassword" placeholder="Senha" required>
        <button type="submit">Acessar</button>
      </form>
	  <p>
			<?php if(isset($_SESSION['msg_de_erro'])){
				echo $_SESSION['msg_de_erro'];
				unset($_SESSION['msg_de_erro']);
			}?>
		</p>
		<p>
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
		</p>
    </div>
          <h3>Professores Login:</h3>
<table border="1">
   <tr>
       <th>Email:</th>
       <td>mlaj@cesar.school</td>
   </tr>
   <tr>
       <th>Senha:</th>
       <td>marcelo123</td>
   </tr>
</table>
<br>
<table border="1">
   <tr>
       <th>Email:</th>
       <td>lrva@cesar.school</td>
   </tr>
   <tr>
       <th>Senha:</th>
       <td>lis123</td>
   </tr>
</table>

          <h3>Alunos Login:</h3>
<table border="1">
   <tr>
       <th>Email:</th>
       <td>mla@cesar.school</td>
   </tr>
   <tr>
       <th>Senha:</th>
       <td>marcelo123</td>
   </tr>
</table>
<br>
<table border="1">
   <tr>
       <th>Email:</th>
       <td>lml@cesar.school</td>
   </tr>
   <tr>
       <th>Senha:</th>
       <td>lucas123</td>
   </tr>
</table>

</center>
  </body>
</html>
