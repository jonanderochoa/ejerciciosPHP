<!--
Programa que contiene un formulario con operaciones aritméticas básicas.
Tanto el formulario como el php están en la misma página.
-->
<!DOCTYPE html>
<html>
<head>
	<title>Prueba</title>
</head>
<body>
	<form action="" method="POST" name="op">
		<label for="num1"></label>
		<input type="text" name="num1" id="num1">
		<label for="num2"></label>
		<input type="text" name="num2" id="num2">
		<label for="operacion"></label>
		<select name="operacion" id="operacion">
			<option>Suma</option>
			<option>Resta</option>
			<option>Multiplicación</option>
			<option>División</option>
            <option>Módulo</option>
		</select>
		<input type="submit" name="button" id="button" value="Enviar" onclick="prueba">
	</form>

	
<?php
	if( isset($_POST["button"]) ) {	//Si se a enviado el formulario...
        $numero1 = $_POST['num1'];
        $numero2 = $_POST['num2'];
        $operacion = $_POST['operacion'];
        
        if ( !strcmp("Suma", $operacion) ){ //Si el tipo de operacion es Suma...
            echo "El resultado de $numero1 + $numero2 es: " . ($numero1 + $numero2 );
        }
       if ( !strcmp("Resta", $operacion) ){ //Si el tipo de operacion es Resta...
            echo "El resultado de $numero1 - $numero2 es: " . ($numero1 - $numero2 );
        }
        if ( !strcmp("Multiplicación", $operacion) ){ //Si el tipo de operacion es Multiplicación...
            echo "El resultado de $numero1 * $numero2 es: " . ($numero1 * $numero2 );
        }
        if ( !strcmp("División", $operacion) ){ //Si el tipo de operacion es División...
            echo "El resultado de $numero1 / $numero2 es: " . ($numero1 / $numero2 );
        }
        if ( !strcmp("Módulo", $operacion) ){ //Si el tipo de operacion es Módulo...
            echo "El resultado de $numero1 % $numero2 es: " . ($numero1 % $numero2 );
        }   
    }
 ?>
</body>
</html>