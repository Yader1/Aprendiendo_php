<?php 	
	require('../Conecxion/connection.php');

	$sql = "INSERT INTO estudiante(nombre, email, id_curso) VALUES('$_REQUEST[nombre]', '$_REQUEST[mail]', '$_REQUEST[codcurso]')";

	$resultado = $mysqli -> query($sql);

	if($resultado ){
		echo "El estudiante se inserto correctamente";
	}else{
		echo "Lo sentimos hubo un error";
	}
 ?>