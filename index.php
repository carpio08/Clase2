<html>
<head></head>
<body>

<?php
	$miArray = array('1'=>90, '30'=>7, 'e'=>99, 'hola'=>"Mundo");

	var_dump($miArray);
	echo("<br>");
	foreach ($miArray as $dato) {
		echo($dato);
		echo("<br>");
	}

	require_once('FiguraGeometrica.php');

	$figura = new FiguraGeometrica;
	echo($figura->GetColor());
	echo $figura->ToString();

?>


</body>

</html>