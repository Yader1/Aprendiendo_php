<?php 
	echo "<h1>Tirada de datos</h1>";
	$dado = rand(1, 16);
	echo "<p>Has sacado un dado $dado.</p>";

	if($dado <= 5){
		echo "<p>Ha conseguido la mayor a cinco.</p>";
	}else{
		echo "<p>Tu puntuacion es menor o igual a cinco.</p>";
	}

	echo "<p>Hasta la proxima :)</p>";
 ?>