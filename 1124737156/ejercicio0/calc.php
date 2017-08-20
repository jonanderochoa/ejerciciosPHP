<!--
	Pagina donde se capturan los datos introducidos en el formulario 
	de calc.html y se realizan los calculos necesarios
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Carga los datos enviados por calc.html</title>
</head>
<body>
	<?php 
		$y = $_POST['a'];
		$z = $_POST['b'];
		$c = $y + $z;
		echo "La suma de ".$y." + ".$z." = ".$c;
	 ?>
</body>
</html>