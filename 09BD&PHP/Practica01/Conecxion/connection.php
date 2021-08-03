<?php
	$mysqli = new mysqli("127.0.0.1", "root", "", "registro_db");

	//echo "<pre>";
	//var_dump($mysqli);
	//echo "</pre>";

	if($mysqli -> connect_errno){
		echo "Fallo al conectar, numero de error: ".$mysqli -> connect_errno."<br>Descripciones del error: ".$mysqli -> connect_error;

		echo "Hubo un error de conexion, intentelo mas tarde";
	}else{
		//echo "La conexion fue exitosa";
	}
 ?>