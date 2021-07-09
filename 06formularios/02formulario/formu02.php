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
	<?php
		$n1 = 0; $n2 = 0; $s = 0;
		if(!isset($_POST["btnCalcular"])) {   //mientras el form no se ha enviado
	 ?>
	<form method="post" action="formu02.php">
		<label for="suma">Suma de dos numeros:</label>
		<label for="numero1">Numero 1</label>
		<input name="txtn1" type="text" id="txtn1" value="<?=$n1?>" />
		<label for="numero2">Numero 2</label>
		<input name="txtn2" type="text" id="txtn2" value="<?=$n2?>"/>
		<input name="btnCalcular" type="submit" id="btnCalcular"
		value="Calcular" />
	</form>
<?php
	}else{
	//ENTRADA
		$n1 = (int)$_POST["txtn1"];
		$n2 = (int)$_POST["txtn2"];
	//PROCESO
		$s = $n1 + $n2;
		echo "La suma de los dos numeros es ".$s;
	}
 ?>
</body>
</html>