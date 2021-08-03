<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/cuadros.css">
	<title>Editar & eliminar</title>
</head>
<body>
	<div class="formulario">
		<div>
			<ul class="options">
				<li class="option">
					<a href="../menu.html">
						<img src="../img/hacia-atras.png" width="50" height="50"><br>
					</a>
				</li>
				<li>
					<h1 class="titulo">Editar o Eliminar usuarios</h1>
				</li>
			</ul>
		</div>
		<div>
			<table class="tablalistado">
				<thead class="table-success table-striped">
					<tr>
						<th>ID</th>
						<th>Usuario</th>
						<th>Nombre</th>
						<th>Password</th>
						<th></th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					<?php
						require('../conexion/connection.php');
						$sql = "SELECT * FROM usuarios";
						$resultado = $mysqli -> query($sql);

						while($fila = $resultado -> fetch_array()){
 					?>
 					<tr>
 						<td><?php echo $fila['id']?></td>
 						<td><?php echo $fila['usuario']?></td>
 						<td><?php echo $fila['nombre']?></td>
 						<td><?php echo $fila['password']?></td>

 						<!--Bottones-->
 						<td><a href="actualizar.php?id=<?php echo $fila['id']?>" class="btn btn-info">Editar</a></th>
 						<td><a href="eliminar.php?id=<?php echo $fila['id']?>" class="btn btn-danger">Eliminar</a></th>
 					</tr>
 					<?php 
 						}
 					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>