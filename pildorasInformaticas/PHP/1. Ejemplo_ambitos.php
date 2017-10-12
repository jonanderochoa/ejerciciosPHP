<!DOCTYPE html>
<html>
<head>
	<title>Ambitos de las variables</title>
</head>
<body>
<?php 
	//Creamos e inicializamos la variable nombre
	$nombre = "Juan";

	function dameNombre(){
		//Usamos la palabra reservada global 
		//para poder usar la variable global
		global $nombre;
		//De esta forma la variable global $nombre 
		//se sobreescribe con un string que contine 
		//la propia variable global
		$nombre = "Hola, mi nombre es " . $nombre;
	}

	//Llamamos a la funcion
	dameNombre();

	//Muestra Hola, mi nombre es Juan
	echo $nombre;
 ?>
</body>
</html>
