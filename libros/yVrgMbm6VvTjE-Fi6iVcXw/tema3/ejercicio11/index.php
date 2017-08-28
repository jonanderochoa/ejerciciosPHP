<!--
Programa que dada una hora, calcula el tiempo restante que queda
de dia en segundos
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tiempo restante de dia</title>
</head>
<body>
	<form action="operar.php" method="POST">
		<p>
		Programa que calcula el tiempo restante que queda de dia 
		hasta la media noche en segundos
		</p>
		<label>Introduce la hora del día</label>
		<input type="time" name="hora" size="10" placeholder="Ej:14:30">
		<input type="submit" name="Enviar" size="10">
	</form>
</body>
</html>