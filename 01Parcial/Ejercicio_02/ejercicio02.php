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
 		$nota= 0;
		if(!isset($_POST["btn"])){
 	?>
 	<form method="post" action="ejercicio02.php">
 		<label for="suma">Ingrece su puntaje:</label>
		<input name="txt" type="text" id="txt"/>
		<input name="btn" type="submit" id="btn"
		value="Verificar" />
 	</form>

 	<?php 
 		}else{
 			$nota = (int)$_POST["txt"];

 			switch ($nota) {
				case 70:
					echo "Ha ingresado a la facultad de Administracion";
					break;

				case 80:
					echo "Ha ingresado a la facultad Industrial";
					break;

				case 90:
					echo "Ha ingresado a la facultad de Electronica";
					break;

				case 100:
					echo "Ha ingresado a la facultad de Sistemas";
					break;

				default:
					echo "Lo sentimos su puntaje no le deja ingresar en ninguna facultad";
					break;
			}
 		}
 	?>
 </body>
 </html>