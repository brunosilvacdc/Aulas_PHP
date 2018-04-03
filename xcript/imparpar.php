<!DOCTYPE html>
<html>
<head>
	<title>Impar Par</title>
</head>
<body>


<?php

	if(isset($_POST["num"])){
	 	echo $_POST["num"];

	 	$num = $_POST["num"];

	 	if ($num % 2 == 0){
	 		echo "<br>O número informado é par ";
	 	}else{
	 		echo " <br>O numero informado é impar";
	 	}
	}
?>

<form method="POST">
	<input type="text" name="num">
	<input type="submit">
</form>

</body>
</html>