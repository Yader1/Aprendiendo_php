<?php 
	$nombre = "NULL";
	$parcial1 = 0;
	$parcial2 = 0;

	if(isset($_POST["btnCalcular"])){
		$nombre = $_POST["nom"];
		$parcial1 = (float)$_POST["par1"];
		$parcial2 = (float)$_POST["par2"];
	}

	//Calculamos promedio
	$promedio = ($parcial1 + $parcial2)/2;

	echo "El nombre del estudiante es ".$nombre;echo "<br>";
	echo "Parcial 1: ".$parcial1;echo "<br>";
	echo "Parcial 2: ".$parcial2;echo "<br>";
	echo "Su promedio es de ".$promedio;echo "<br>";

	if($promedio >= 60){
		echo "El estudiante aprovo la asignatura";
		echo "<br>";
	}else{
		echo "El estudiante reprovo la asignatura";
	}

 ?>