<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<title>Contato</title>
	<meta charset="utf-8">
</head>
<body>
<form method="post" enctype="multipart/form-data" action="">
	Foto: <input type="file" name="foto"><br>
	Nome: <input type="text" name="nome"><br>
	Email: <input type="text" name="email"><br>
	Senha: <input type="Senha" name="password"><br>

	<input type="submit" value="Enviar">
</form>

<?php
	if ($_POST || $_FILES) {
			echo '<pre>';
			print_r($_FILES);
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$senha = $_POST['password'];
			echo '<hr>';
			echo "Nome Digitado: . $nome <br>";
			echo "Email Digitado: . $email <br>";
			echo " Senha . $senha";

	}
?>
</body>
</html>