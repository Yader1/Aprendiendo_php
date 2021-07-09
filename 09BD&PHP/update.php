<?php 
	require('connection.php');

	$mi_id = 1;
	$mi_nombre = "Manuel";
	$mi_usuario = "Manuel454";
	$mi_password = "98765";

	$sql = "UPDATE usuarios SET nombre='$mi_nombre', usuario= '$mi_usuario', password='$mi_password' WHERE id = 'mi_id'";

	$resultado = $mysqli -> query($sql);

	if($resultado){
		if($mysqli -> affected_rows > 0){
			echo "Usuario modificado correctamente";
		}else{
			echo "Este usuario no existe";
		}
	}else{
		echo "Hubo un error ";
	}
 ?>