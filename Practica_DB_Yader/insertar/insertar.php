<?php 
	require('../conexion/connection.php');

	$sql = "INSERT INTO usuarios(usuario, password, nombre) VALUES('$_REQUEST[usuario]', '$_REQUEST[password]', '$_REQUEST[nombre]')";

	$resultado = $mysqli -> query($sql);

	if($resultado ){
		echo "El estudiante se inserto correctamente";
		Header("Location: index.html");
	}else{
		echo "Lo sentimos hubo un error";
	}
 ?>