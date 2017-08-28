<!--
	Pagina que recoge los valores del formulario y realiza los calculos
	necesarios antes de mostrar el resultado. Todo ello en la misma pagina
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Programa completo de calculadora</title>
</head>
<body>
	<?php 
		//Recoge los valores introducidos por el formulario si existen sino devuelve nulo
		////Con esta funcion evitamos el error que muestra undefined index
		$y = isset($_POST['a']) ? $_POST['a'] : null;
		$z = isset($_POST['b']) ? $_POST['b'] : null;
		
		//Si se pulsa el boton btsuma...
		if(isset($_POST['btsuma'])){
			$c = $y + $z;
			echo "La suma de ".$y." + ".$z." = ".$c;
		}
		if(isset($_POST['btresta'])){
			$c = $y - $z;
			echo "La resta de ".$y." - ".$z." = ".$c;
		}
		if(isset($_POST['btmulti'])){
			$c = $y * $z;
			echo "La multiplicación de ".$y." * ".$z." = ".$c;
		}
		if(isset($_POST['btdivi'])){
			if($z != 0){
				$c = $y / $z;
				echo "La división de ".$y." / ".$z." = ".$c;	
			}else{
				$c = 0;
				echo "Cualquier número entre 0 es infinito";
			}
		}
		?>
		<form action="calc2.php" name="calc" method="POST">
			A: <input type="text" name="a" size="10" value="<?php echo $y; ?>">
			B: <input type="text" name="b" size="10" value="<?php echo $z; ?>">
			<br>
			<input type="submit" name="btsuma" value="Suma">
			<input type="submit" name="btresta" value="Resta">
			<input type="submit" name="btmulti" value="Multiplicación">
			<input type="submit" name="btdivi" value="División">
		</form>
	 
</body>
</html>