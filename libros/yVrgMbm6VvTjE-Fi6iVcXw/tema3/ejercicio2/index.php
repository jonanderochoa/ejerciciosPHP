<?php
/**
 * Introducimos un numero y nos devuelve si es mañana tarde o noche
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>horario</title>
</head>
<body>
	<form action="operar.php" method="get" accept-charset="utf-8">
		<label>Introduce la hora del dia</label>
		<input type="time" name="hora" placeholder="Ej: 12:20">
		<input type="submit" name="Enviar">
	</form>
</body>
</html>