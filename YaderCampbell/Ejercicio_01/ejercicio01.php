<?php 
// Realizar un programa que muestre los números pares del 100 al 20, de tres en tres.
	for ($i=100; $i >= 20 ; $i-=3) { 
		// code...
		if($i %2 == 0){
			echo "<p>$i</p>";
		}
	}
 ?>