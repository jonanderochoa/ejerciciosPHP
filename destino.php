<?php
$primero = $_POST["primero"];
$segundo = $_POST["segundo"];

$suma = $primero + $segundo;
echo "La suma es: ".$suma;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>destino</title>
</head>
<body>
	<label>Resultado:</label>
	<input type="text" name="total" value="<?php $suma ?>">
</body>
</html>