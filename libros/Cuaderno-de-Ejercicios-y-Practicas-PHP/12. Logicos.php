<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejercicio12</title>
</head>
<body>
	<h1>Ejercicio de operadores logicos</h1>
	<?php 
		$a = 8;
		$b = 3;
		$c = 3;
		echo "AND: ",($a == $b) && ($c > $b), "<br>";
		echo "OR: ",($a == $b) || ($b == $c), "<br>";
		echo "NOT: ", !($b <= $c), "<br>";
	 ?>	
</body>
</html>