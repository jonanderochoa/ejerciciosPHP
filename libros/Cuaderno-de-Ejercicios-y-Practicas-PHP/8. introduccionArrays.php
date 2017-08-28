<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejercicio8</title>
</head>
<body>
	<h1>Introducción a los arrays</h1>
	<?php 
		$dia[1] = "Lunes";
		$dia[2] = "Martes";
		$dia[3] = "Miercoles";
		$dia[4] = "Jueves";
		$dia[5] = "Viernes";
		$dia[6] = "Sabado";
		$dia[7] = "Domingo";
		/*
		Si ponemos 'N' en la funcion date, le decimos que muestre el dia segun la norma
		ISO 8601: Lunes : 1 ->hasta Domingo : 7
		Cuidado, si no ponemos las comillas del N nos da el fallo:
		Use of undefined constant N
		*/
		$hoy = date('N');
		echo "Hoy es $dia[$hoy]";
	 ?>	
</body>
</html>