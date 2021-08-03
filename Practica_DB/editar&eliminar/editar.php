<?php 
	require('../conexion/connection.php');

	$id = $_REQUEST['id'];
	$usuario = $_REQUEST['usuario'];
	$nombre = $_REQUEST['nombre'];
	$password = $_REQUEST['password'];

	$sql = "UPDATE usuarios SET usuario='$usuario', nombre='$nombre',password='$password' WHERE id='$id'";
	$resultado = $mysqli -> query($sql);

	if($resultado){
		Header("Location: editar&eliminar.php");
	}
 ?>