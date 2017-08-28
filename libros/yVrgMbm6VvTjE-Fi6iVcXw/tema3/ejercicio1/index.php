<?php
/**
 	OPERADORES DE COMPARACION
 	$a == $b 	--> 	igual
	$a === $b 	--> 	identico
	$a != $b 	--> 	diferente
	$a < $b 	--> 	menor
	$a > $b 	--> 	mayor
	$a <= $b 	--> 	menor o igual
	$a >= $b 	--> 	mayor o igual
	$a <=> $b 	--> 	-1 si $a es menor / 0 si son iguales / 1 si $a es mayor 

	OPERADORES LOGICOS
	&& and
	|| or
	! 
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Condicionales</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<p>Introduce un dia de la semana y te mostrare la asignatura 
	que tienes a primera hora</p>
	<form action="operar.php" method="get" accept-charset="utf-8">
		<label>Introduce el dia de la semana: </label>
		<input type="text" name="dia" placeholder="Ej: Lunes">	
		<input type="submit" name="Enviar">
	</form>
	
</body>
</html>