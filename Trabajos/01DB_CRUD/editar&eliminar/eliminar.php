<?php 
	require('../conexion/connection.php');

	$id = $_REQUEST['id'];

	$sql = "DELETE FROM usuarios WHERE id='$id'";
	$resultado = $mysqli -> query($sql);
 
	if($resultado){
		Header("Location: editar&eliminar.php");
	}
 ?>