<?php 
	echo "<h1>Bievenido, $_GET[nombre]</h1>";
 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Formulario 1</title>
	</head>
	<body>
		<form action="form01.php" method="get">
	  		<p>Nombre: <input type="text" name="nombre"></p>
	  		<p><input type="submit" value="Enviar"></p>
		</form>
	</body>
</html>