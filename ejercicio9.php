<html>
<head></head>
<body>

<?php
	
	$lapicera1 = array('color'=>'rojo', 'marca'=>'bic', 'trazo'=>'fino', 'precio'=>50);
	$lapicera2= array('color'=>'azul', 'marca'=>'alba', 'trazo'=>'grueso', 'precio'=>100);
	$lapicera3 = array('color'=>'amarillo', 'marca'=>'fader', 'trazo'=>'hiper fino', 'precio'=>150);
	var_dump($lapicera1);
	echo "<br>";
	var_dump($lapicera2);
	echo "<br>";
	var_dump($lapicera3);
	echo "<br>";

	$arrayContenedor = array($lapicera1, $lapicera2, "hola", $lapicera3);
	var_dump($arrayContenedor);
	echo "<br>";

	foreach ($arrayContenedor as $element) {
		if(is_a($element, 'array')){
			foreach ($element as $dato) {
				echo "<br>";
				echo $dato;
			}
		}else{
			echo "No es un array";
			echo "<br>";
		}			
	}	


?>


</body>

</html>