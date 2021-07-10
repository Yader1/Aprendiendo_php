<?php 
	$n1 = 0;
	$n2 = 0;

	if(isset($_POST["btnCalcular"])){
		$n1 = (int)$_POST["txtn1"];
		$n2 = (int)$_POST["txtn2"];
	}

	$suma = $n1 + $n2;
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
 	<form method="post" action="ejercicio05.php">
		<label for="suma">Suma de dos numeros:</label><br>
		<label for="numero1">Numero 1</label>
		<input name="txtn1" type="text" id="txtn1"/>
		<label for="numero2">Numero 2</label>
		<input name="txtn2" type="text" id="txtn2"/>
		<input name="btnCalcular" type="submit" id="btnCalcular"
		value="Calcular" /><br>
		<h2>Resultado: <?php
					if(isset($suma)){
						echo $suma;
					}
				?>	
		</h2>
	</form>
 </body>
 </html>