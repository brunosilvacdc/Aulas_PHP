<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<title>Contato</title>
	<meta charset="utf-8">
</head>
<body>
<form method="post" enctype="multipart/form-data">
	Email: <input type="text" name="email"><br>
	Senha: <input type="password" name="senha"><br>
	<input type="submit" value="Enviar">
</form>

<?php
	if ($_POST) {
			$email = $_POST['email'];
			$senha = $_POST['senha'];
			 if($email == 'admin@app.com.br' && $senha ='admin'){
			 	session_start();
			 	$_SESSION['logado'] = true;
			 	$_SESSION['nome'] = 'Administrador do Sistema';
			 	$_SESSION['email'] = $email;
			 	header('location: aplicacao.php');
			 }else{
			 	echo "<hr><h1> Usuario ou senha incorretos</h1></hr>";
			 }
	}
?>
</body>
</html>