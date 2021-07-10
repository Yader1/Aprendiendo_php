<?php 
	$peso = 0;
	$altura = 0;

	if(isset($_POST["btnCalcular"])){
		$peso = (float)$_POST["peso"];
		$altura = (int)$_POST["altura"];
	}

	$imc =(int)(($altura*$altura)/$peso);

	echo "Su indice de masa corporal es de ".$imc;
	//Comprovamos si el imc se encuentra en un rango normal
	if($imc >= 20 && $imc <= 25){
		echo "<br>";
		echo "Su indice de masa corporal se encuentra en un rango normal";
	}
 ?>