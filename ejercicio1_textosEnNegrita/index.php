<?php
	//Creamos una variable que insertaremos en el body
	$variable1 = "Eru";
	$numero = 20;
	$euros = $_POST['euros'];
	$pesetas = $euros * 166;
	#Muestra todas las variables definidas con sus respectivos valores
	print_r(get_defined_vars()); 
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
	<?php echo "Que tal estas ".$variable1."<br>"; ?>
	


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
		</tbody>
	</table>
	<br>

	<form action="index.php" method="post">
		<h2>Conversion de euros a pesetas</h2>
		<br>
		<input type="number" name="euros" placeholder="introduce los euros">
		<br>
		<input type="submit" name="Submit">
	</form>
	<br>
		<input type="number" name="pesetas" value = "<?php $pesetas; ?>">
 </body>
</html>