<?php 
	if(isset($_POST['btnEnviar'])){
		$nombre = $_POST['nom1'];
	}else{
		$nombre = "";
	}
	if($nombre == ""){
		echo "No se ha escrito nada";
	}else{
		echo "Su nombre es ".$nombre;
	}
 ?>