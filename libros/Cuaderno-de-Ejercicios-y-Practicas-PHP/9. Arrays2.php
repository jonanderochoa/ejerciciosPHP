<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejercicio9</title>
</head>
<body>
	<h1>Ejercicio de array en una sola linea</h1>
	<p>Es el mismo ejercicio que el anterior pero en una sola line</p>
	<?php 
		#Forma antigua pero sirve
		#$dia = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");
		
		#Forma nueva
		$dia = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];
		/*
		Si ponemos 'N' en la funcion date, le decimos que muestre el dia segun la norma
		ISO 8601: Lunes : 1 ->hasta Domingo : 7
		Cuidado, si no ponemos las comillas del N nos da el fallo:
		Use of undefined constant N
		En este caso tenemos que restar uno porque al no asignar la clave al array empieza
		en 0 y el valor devuelto por la funcion date('N') es de 1 al 7. Al restarle 1 lo arreglamos
		*/
		$hoy = date('N') - 1;
		echo "Hoy es <b>$dia[$hoy]</b>";
	 ?>	
</body>
</html>