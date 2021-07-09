<?php 
	require('connection.php');

	$sql = "SELECT * FROM usuarios";

	$resultado = $mysqli -> query($sql);

	echo "<pre>";
	echo var_dump($resultado);
	echo "</pre>";

	if($resultado -> num_rows > 0){
		while($fila = $resultado -> fetch_assoc()){
			/**
			 * 
			echo "<pre>";
			echo var_dump($fila);
			echo "</pre>";
			*/

			//Vamos a imprimir la variable fila
			echo $fila['id'];echo "<br>";
			echo $fila['usuario'];echo "<br>";
			echo $fila['password'];echo "<br>";
			echo $fila['nombre'];echo "<br>";
		}
	}else{
			echo "No hay usuarios registrados";
	}
 ?>