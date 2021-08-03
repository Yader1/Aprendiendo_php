<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Listado</title>
 	<link rel="stylesheet" href="../css/cuadros.css">
 	<link rel="stylesheet" href="../css/estilos.css">

 </head>
 <body>
 	<?php 
		require('../conexion/connection.php');

		$sql = "SELECT * FROM usuarios";
		$resultado = $mysqli -> query($sql);
		echo '<div class="formulario">';
		echo '<div>';
		echo '<ul class="options">';
		echo '<li class="option">';
		echo '<a href="../menu.html"><img src="../img/hacia-atras.png" width="50" height="50"><br></a>';
		echo '</li>';
		echo '<li><h1 class="titulo">Lista de los usuarios registrados</h1></li>';
		echo '</ul>';
    	echo '</div>';
		echo '<table class="tablalistado">';
		echo '<tr><th>ID</th><th>Usuario</th><th>Nombre</th><th>Password</th></tr>';

		if ($resultado -> num_rows > 0){
			while ($fila = $resultado -> fetch_array()){
				echo '<tr>';
				echo '<td>';
				echo $fila['id'];
				echo '</td>';
				echo '<td>';
				echo $fila['usuario'];
				echo '</td>';
				echo '<td>';
				echo $fila['nombre'];
				echo '</td>';
				echo '<td>';
				echo $fila['password'];
				echo '</td>';
				echo '</tr>';
			}
		echo '</table>';
		echo '</div>';
		}
 	?>
 </body>
 </html>