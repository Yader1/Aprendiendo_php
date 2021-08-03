<?php 
	require('../conexion/connection.php');

	$sql = "SELECT FROM usuarios WHERE id = '$_REQUEST[id]'";
	$resultado = $mysqli -> query($sql);
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" href="../css/estilos.css">
 	<title>Editar datos</title>
 </head>
 <body>
 	<div class="formulario">
		<div>
			<ul class="options">
				<li class="option">
					<a href="./editar&eliminar.php">
						<img src="../img/hacia-atras.png" width="50" height="50"><br>
					</a>
				</li>
				<li>
					<h1 class="titulo">Actualizar usuario</h1>
				</li>
			</ul>
		</div>
		<form class="formu" action="editar.php" method="post">
			<div>
				<input type="hidden" name="id" value="<?php echo $resultado['id']?>">
				<label class="etiqueta" for="nombre">Nombre del estudiante:</label><br>
				<input class="text" type="text" name="nombre" value="<?php echo $resultado['nombre']?>" placeholder="Ingrece nombre y apellido" size="50" required>
				<br>
				<label class="etiqueta">Usuario:</label><br>
				<input class="text" type="text" name="usuario" value="<?php echo $resultado['usuario']?>" placeholder="Ingrece un usuario" size="50" required>
				<br>
				<label class="etiqueta" for="mail">Contraseña:</label><br>
				<input class="text" type="text" name="password" placeholder="Contraseña" value="<?php echo $resultado['password']?>" size="50" required>
				<br>
				<input class="btn" type="submit" value="Actualizar">
			</div>
		</form>
	</div>
 </body>
 </html>