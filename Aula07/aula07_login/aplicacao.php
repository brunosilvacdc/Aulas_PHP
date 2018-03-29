<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Contato</title>
</head>
<body>
<?php
	require 'checkLogin.php';
	$nome =$_SESSION['nome'];
?>

Bem vindo(a) : <?= $nome ?> <hr>
<a href="sair.php">Sair</a>
</body>
</html>
