<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejercicio11</title>
</head>
<body>
	<h1>Ejercicio de Comparaciones</h1>
	<?php 
		$a = 8;
		$b = 3; 
		echo "igual: ", $a == $b, "<br>";
		var_dump($a == $b);
		echo  "distinto: ", $a != $b, "<br>";
		echo  "menor: ", $a < $b, "<br>";
		echo  "mayor: ", $a > $b, "<br>";
		echo  "mayor o igual: ", $a >= $b, "<br>";
		echo  "menor o igual: ", $a <= $b, "<br>";
		echo  "nave: ", $a <=> $b;
	 ?>	
</body>
</html>