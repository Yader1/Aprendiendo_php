<?php
	$iva = 0;
	$precio = 0;
	$vv = 0;

	if(isset($_POST['btnCalcular'])){
		$vv = (float)$_POST['valor'];

		$iva = $vv * 0.15;

		$precio = $iva + $vv;
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
	<form method="post" action="ejercicio.php">
	<label for="suma">Calculo del precio total:</label>
	<label for="nume1">Valor de venta</label>
	<input name="valor" type="text" id="txtn1" value="<?=$vv?>"/>
	<label for="numero2">I.V.A</label>
	<input name="txtn2" type="text"  value="<?=$iva?>" id="txtn2"/>
	<label for="sumaNum">Total</label>
	<input name="total" type="text" id="txt" value="<?=$precio?>" />
	<br>
	<input name="btnCalcular" type="submit" id="btnCalcular"
	value="Calcular" />
</form>
</body>
</html>