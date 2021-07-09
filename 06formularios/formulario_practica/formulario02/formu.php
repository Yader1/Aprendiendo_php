<?php 
	$valor = 0;
	if(isset($_POST["Comparar"])){
		$valor1 = $_POST["txt1"];
		$valor2 = $_POST["txt2"];
		$valor3 = $_POST["txt3"];
	}else{
		$valor1 = "";
		$valor2 = "";
		$valor3 = "";
	}

	if($valor1 =="" && $valor2 == "" && $valor3 == ""){
		echo "Error";
	}elseif ($valor1 > $valor2 && $valor1 > $valor3) {
		echo "$valor1 es el numero mayor";
	}elseif ($valor1 < $valor2 && $valor2 > $valor3){
		echo "$valor2 es el numero mayor";
	}else{
		echo "$valor3 es el numero mayor";
	}

 ?>