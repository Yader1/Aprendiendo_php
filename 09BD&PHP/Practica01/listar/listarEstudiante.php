<?php 
	
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Listado</title>
 	<style>
	    .tablalistado {
	      border-collapse: collapse;
	      box-shadow: 0px 0px 8px #000;
	      margin: 20px;
	    }
	    .tablalistado th {
	      border: 1px solid #000;
	      padding: 5px;
	      background-color: #FFD040;
	    }
	    .tablalistado td {
	      border: 1px solid #000;
	      padding: 5px;
	      background-color: #FFDD73;
	    }
	  </style>
 </head>
 <body>
 	<?php 
		require('../Conecxion/connection.php');

		$sql = "SELECT * FROM estudiante";
		$resultado = $mysqli -> query($sql);
		echo '<table class="tablalistado">';
		echo '<tr><th>ID</th><th>Nombre</th><th>Correo</th><th>Curso</th></tr>';

		if ($resultado -> num_rows > 0){
			while ($fila = $resultado -> fetch_array()){
				echo '<tr>';
				echo '<td>';
				echo $fila['id'];
				echo '</td>';
				echo '<td>';
				echo $fila['nombre'];
				echo '</td>';
				echo '<td>';
				echo $fila['email'];
				echo '</td>';
				echo '<td>';
				echo $fila['id_curso'];
				echo '</td>';
				echo '</tr>';
			}
		echo '</table>';

		}
 	?>

 </body>
 </html>