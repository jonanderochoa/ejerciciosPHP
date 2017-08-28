<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vectores 3</title>
</head>
<body>
	<?php 
		#Si existe la variable vec del metodo POST
		if(isset($_POST['vec'])){
			$vector = $_POST['vec'];
			$n = count($vector);
			$suma = 0;
			echo "El vector tiene $n elementos <br>";
			//Muestra los valores y la suma
			for ($i=0; $i < $n; $i++) { 
				echo "$i = $vector[$i] <br>";
				$suma = $suma + $vector[$i];
			}
			echo "La suma es: $suma <br>";
			$n = $_POST['n'];
		//Si no existe muestra que todos los valores son 0
		}else{
			$n = 3;
			$vector[] = 0;
			$vector[] = 0;
			$vector[] = 0;
		}
	?>
	<form action="vector3.php" method="post">
		<p>Uso de Vectores : ejemplo de Carga de datos ,
		dejando los datos enviados en las cajas de texto</p>
		Número de elementos:
		<input type="text" name="n" size="5" value="<?php echo $n; ?>">
		<br>
		<?php
		for($i = 0; $i < $n; $i++){
			echo $i;
			echo " <input type='text' name='vec[]' value='$vector[$i]'>";
			echo "<br>";
		}
		?>
		<input type="submit">
	</form>
</body>
</html>