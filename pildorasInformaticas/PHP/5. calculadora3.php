<!--
Programa que contiene un formulario con operaciones aritméticas básicas.
La diferencia con el anterior es que usaremos include para añadir el código
php y ademas añadiremos los operadores de Incremento y Decremento.
-->
<!DOCTYPE html>
<html>
<head>
	<title>Prueba</title>
	<meta charset="UTF-8">
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
            <option>Incremento</option>
			<option>Decremento</option>
		</select>
		<input type="submit" name="button" id="button" value="Enviar" onclick="prueba">
    </form>
    <?php
        include("5. calculadora3include.php");

        if( isset($_POST["button"]) ) {	//Si se a enviado el formulario...
            $numero1 = $_POST['num1'];
            $numero2 = $_POST['num2'];
            $operacion = $_POST['operacion'];
                
            calcular($numero1, $numero2, $operacion);
        }
    ?>
</body>
</html>