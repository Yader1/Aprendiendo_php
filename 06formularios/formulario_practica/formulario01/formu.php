<?php
	$valor = 0;
	if(isset($_POST["comparar"])){
		$valor = $_POST["txt1"];
	}else{
		$valor = "";
	}

	if($valor ==""){
		echo "Error";
	}elseif ($valor %2 == 0) {
		echo "El valor ingresado es par";
	}else{
		echo "El valor ingresado es impar";
	}
?>