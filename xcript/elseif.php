<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
			if(isset($_POST['idade'])){
			$idade = $_POST['idade'];
				
			if ($idade < 18){
				echo "a idade é de criança ou de um adulto";
			}elseif ($idade >= 18 and $idade < 60) {
				echo " A idade é de um adulto";
			}elseif ( $idade >= 60 and $idade <99) {
				echo " A idade é de uma pessoa da terçeira idade";
			}else{
				echo "já é múmia";
			}
		}
	?>
	<form method="POST">
		<input type="text" name="idade">
		<input type="submit">
	</form>

</body>
</html>