<?php 

 ?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
 	<form method="post" action="ejercicio07_parte2.php">
		<label for="numero1">Ingrece el nombre del estudiante:</label>
		<input name="nom" type="text" id="nom"/><br>
		<label for="par1">Parcial 1:</label>
		<input name="par1" type="number" id="par1"/><br>
		<label for="par1">Parcial 2:</label>
		<input name="par2" type="number" id="par2"/><br>
		<input name="btnCalcular" type="submit" id="btnCalcular"
		value="Calcular" /><br>
	</form>
 </body>
</html>