<!-- 
Carga una lista de 8 elementos en un formulario con vectores e imprime
su sumatoria 
-->
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
	<p>Muestra 8 inputs que podremos rellenar para calcular el sumatorio total</p>
	<!--Envia los datos a vector.php con get-->
	<form action="vector.php" method="post">
		<?php 
			$n = 8;

			for ($i=0; $i < $n; $i++) { 
				echo $i;
				echo " <input type='text' name='vec[]' size='10'>";
				echo "<br>";
			}
		 ?>
		 <input type="submit">
	</form>
</body>
</html>