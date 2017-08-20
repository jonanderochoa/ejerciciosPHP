<?php 
	$dia = $_GET['dia'];
	$dia = strtolower($dia);

	switch ($dia) {
		case 'lunes':
			echo "El ".$dia." hay: Matemáticas";
			break;
		case 'martes':
			echo "El ".$dia." hay: Física";
			break;
		case 'miercoles':
			echo "El ".$dia." hay: Euskera";
			break;
		case 'jueves':
			echo "El ".$dia." hay: Ingles";
			break;
		case 'viernes':
			echo "El ".$dia." hay: Biología";
			break;
		case 'sabado':
			echo "El ".$dia." no hay clase!!!";
			break;
		case 'domingo':
			echo "El ".$dia." no hay clase!!";
			break;
		default:
			echo "Introduce un valor valido";
			break;
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Dia de la semana</title>
 </head>
 <body>
 	
 </body>
 </html>