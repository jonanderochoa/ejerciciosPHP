<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Operar</title>
</head>
<body>
	<p>
		Calcula el tiempo restante en segundos
	</p>
	<?php 
		$tiempo = $_POST['hora'];
		
		echo $tiempo;
		var_dump($tiempo);
		$tiempo = str_split($tiempo, ":");

	 ?>
</body>
</html>