<?php
$euros = $_POST["euros"];
$pesetas = $euros * 166;
echo "Euros: ".$pesetas;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>destino</title>
</head>
<body>
	<label>Resultado:</label>
	<input type="number" name="pesetas" value = "<?php $pesetas; ?>">
</body>
</html>