<!--
    OPERADORES LOGICOS
    &&  AND
    ||  OR
        XOR
    !

    PRIORIDAD DE OPERADORES
    Podemos ver la lista de prioridades de operadores lógicos en la pagina de php.net 
   
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
        $var1 = true;
        $var2 = false;
        /**
         *  Aunque AND y && sean lo mismo no tienen la misma prioridad:
         * && tiene mas prioridad que =, por lo que primero hace el && y luego el igual. 
         * AND en cambio esta despues de =, lugo = tiene prioridad
         * Veamos un ejemplo
         */

         //Primero el la comparacion y luego el igual
         // $var1 && $var2 --> false
         // resultado = false
        $resultado = $var1 && $var2;
        if( $resultado ){
            echo "&& Correcto <br>";
        }else{
            echo "&& Incorrecto <br>";
        }
        //Primero el igual y luego la comparacion
        // $resultado2 = $var1 --> $resultado2 = true
        $resultado2 = $var1 and $var2;
        if( $resultado2 ){
            echo "and Correcto <br>";
        }else{
            echo "and Incorrecto <br>";
        }
    ?>
</body>
</html>