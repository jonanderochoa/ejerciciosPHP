<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vectores</title>
</head>
<body>
	<?php 
		//Si existe la variable...
		if (isset($_POST['vec'])) {
			//La recoge en la variable vector
			$vector = $_POST['vec'];
			//Guarda el numero de elementos de la variable en la variable n
			$n = count($vector);
			$suma = 0;
			echo "el vector tiene $n elementos <br>";
			//Muestra los valores y calcula la suma total
			for ($i=0; $i < $n; $i++) { 
				echo "$i = $vector[$i] <br>";
				$suma = $suma + $vector[$i];
			}
			//Muestra el total
			echo " la suma es $suma <br>";
		}
	?>

	<!--Envia los datos a vector2.php con get-->
	<form action="vector2.php" method="get">
		<p>Introduce el número de elementos que quieres calcular la sumatoria</p>
		Número de elementos:
		<input type="text" name="n" size="5">
		<input type="submit" value="Aceptar">
	</form>
	<br>
	<br>
	<!-- Envia los datos a vector2.php con post -->
	<form action="vector2.php" method="post">
		<p>Introduce el valor en cada campo que deseas que se sume</p>
		<?php 
		//Si existe la variable n del formulario con get...
		if (isset($_GET['n'])) {
			//Guarda la variable en n
			$n = $_GET['n'];
		}else{
			//Si no $n = 3
			$n = 3;
		}
			//Crea el numero de inputs desde 1 a n
			for ($i=1; $i <= $n; $i++) { 
				echo $i;
				echo "<input type='text' name='vec[]' size='10'>";
				echo "<br>";
			}
		?>
		<input type="submit">
	</form>
</body>
</html>