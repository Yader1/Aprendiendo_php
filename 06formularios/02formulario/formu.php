<?php
	$n1= 0; $n2= 0; $s = 0;
	if(isset($_POST["btnCalcular"])){
		$n1 = $_POST["txtn1"];
		$n2 = $_POST["txtn2"];
		$s = $n1 + $n2;
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style type="text/css">
		label {
			display: block;
		}
	</style>
</head>
<body>
	<form method="post" action="formu.php">
	<label for="suma">Suma de dos numeros:</label>
	<label for="numero1">Numero 1</label>
	<input name="txtn1" type="text" id="txtn1"/>
	<label for="numero2">Numero 2</label>
	<input name="txtn2" type="text" id="txtn2"/>
	<label for="sumaNum">Suma</label>
	<input name="txts" type="text" class="TextoFondo" id="txts" value="<?=$s?>"/>
	<input name="btnCalcular" type="submit" id="btnCalcular"
	value="Calcular" />
</form>
</body>
</html>