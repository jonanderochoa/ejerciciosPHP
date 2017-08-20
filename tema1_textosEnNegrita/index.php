<?php
	//Creamos una variable que insertaremos en el body
	$variable1 = "Eru";
	$numero = 20;
	$direccion="Cambridge";
	$tel = 676767676;
	#Muestra todas las variables definidas con sus respectivos valores
	#print_r(get_defined_vars());
	$x = 144;
	$y = 999; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Poner texto en negrita</title>
	
</head>
<body>
	<h1>Tema 1</h1>

	<p>En este tema vamos a ver como introducir textos con echo, modificar textos,
	crear y usar variables simples, uso de operadores aritmeticos </p>
	Hola
	<!-- b es de bold (negrita) -->
	<!-- u es de underscore(subrayado) -->
	<?php echo "<b><u>"; ?>
		Mundo
	<?php echo "</b></u><br>"; ?>
	
	<!-- Insertamos la variable creada antes -->
	<?php echo "Que tal estas ".$variable1."?<br>"; ?>
	
	<p>Mi nombre es: <?php echo $variable1; ?></p>
	<p>Vivo en: <?php echo $direccion; ?></p>
	<p>Mi telefono es: <?php echo $tel; ?></p>
	

	<table border=1px>
		<caption>Tabla de traducciones</caption>
		<thead>
			<tr>
				<th>Ingles</th>
				<th>Castellano</th>
			</tr>
		</thead>
		<tbody>
			<tr>
			    <td>Hello</td>
				<td>Hola</td>
			</tr>
			<tr>
				<td>Amigo</td>
				<td>Friend</td>
			</tr>
			<tr>
				<td>Novia</td>
				<td>Girlfriend</td>
			</tr>
		</tbody>
	</table>
	<br>

	<p><b>OPERACIONES</b></p>
	Valor 1: <?php echo $x."<br>"; ?>
	Valor 2: <?php echo $y."<br>"; ?>
	Suma: <?php echo ($x + $y)."<br>"; ?>
	Resta: <?php echo ($x - $y)."<br>"; ?>
	Multiplicacion: <?php echo ($x * $y)."<br>"; ?>
	Division: <?php echo ($x / $y)."<br>"; ?>
	Modulo: <?php echo ($x % $y)."<br>"; ?>

	<p><b>PIRAMIDES</b></p>

	<!-- Vamos a hacer una piramide con un for -->
	<?php
		for($j = 10; $j > 0; $j--){ //Numero de filas
			for($k = 0; $k < $j; $k++){ //Pinta las columnas
				echo "*";
			}
			echo "<br>";
		}

		for($j = 9; $j >= 0; $j-=2){ //Numero de filas
			echo " ";
			for($k = 0; $k < $j; $k++){ //Pinta las columnas
				echo "*";
			}

			echo " <br>";
		}
	?>
	


	<form action="destino.php" method="post">
		<h2>Conversion de euros a pesetas</h2>
		<br>
		<input type="number" name="euros" placeholder="introduce los euros">
		<br>
		<input type="submit" name="Submit">
	</form>
		
 </body>
</html>