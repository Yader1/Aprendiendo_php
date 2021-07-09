<?php 
	require('connection.php');

	$mi_nombre = "Manuel";
	$mi_usuario = "Manuel454";
	$mi_password = "1234567";

	//Genenar query
	$sql = "INSERT INTO usuarios (id, nombre, usuario, password) VALUES (NULL, '$mi_nombre', '$mi_usuario', '$mi_password')";

	//Ejecutamos el query y lo guardamos y lo guardamos en una variable
	$resultado = $mysqli -> query($sql);

	if($resultado){
		echo "Usuario se inserto corectamente";
	}else{
		echo "Hubo un error al insertar al usuario".$mysqli -> error;
	}
 ?>