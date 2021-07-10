<?php 
	//Determinar si un número entero es par o impar. Cree una función para resolver el problema.
	$valor = 0;
	
	if(isset($_POST["btn"])){
		$valor = (int)$_POST["numero"];
	}

	if($valor %2 == 0){
		$resultado = "Par";
	}else{
		$resultado = "Impar";
	}
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 	<style type="text/css">
		label {
			display: block;
		}

		div{
			width: 50%;
			margin: 120px auto 0 auto;
			box-shadow: 0px 0px 15px 0px rgba(0, 0, 0,.3);
			border-radius: 2px;
			background: white;
			border: 5px solid #9400D3;
		}
	</style>
 </head>
 <body>
 	<div>
		<form action="ejercicio04.php" method="post">
	  		<label>Numero</label><input type="number" name="numero">
	  		<p><input name="btn" type="submit" id="btn" value="Calcular"></p>
	  		<h4>Resultado: <?php
					if(isset($resultado)){
						echo $resultado;
					}
				?>	
			</h4>
		</form>
	</div>
 </body>
 </html>