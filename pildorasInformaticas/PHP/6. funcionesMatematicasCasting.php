<!--
Vamos a generar un número aleatorio usando las funciones de rand()
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        //Generar un valor aleatorio 
        $num1 = rand();
        echo "El número es: " . $num1 . "<br>";
        //Generar un aleatorio entre un máximo y un mínimo
        $num2 = rand(10, 50);
        echo "El número es: " . $num2 . "<br>";
        //Potencias
        $num3 = pow(5, 3);
        echo "El número es: " . $num3 . "<br>";
        //Redondeo
        $num4 = 5.356;
        echo "El número es: " . round($num4) . "<br>";
        echo "El número es: " . round($num4, 1) . "<br>";
        echo "El número es: " . round($num4, 2) . "<br>";
        echo "El número es: " . round($num4, 3) . "<br>";

        /**
         * CASTING
         * Hay de dos tipos:
         * IMPLICITO: El que hace automaticamente PHP.
         * 
         * EXPLICITO: El que le forzamos nosotros a que haga.
         */
        //TIpo String
        $valor1 = "5";
        //Cambia implicitamente a integer
        $valor2 = $valor1 + 3;
        //Ahora pasa a float
        $valor3 = valor2/3;

        //Si quiero hacer un casting explicito 
        $texto = "5";
        $resultado = (int)$texto; //Transformamos el texto en integer
    ?>
</body>
</html>

