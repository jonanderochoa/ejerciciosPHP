<!--
En el php hemos aprendido a crear funciones y a pasar parametro ya que sino no veria las variables. 
Tambien hemos aprendido a añadir estilos.
-->
<style>
.resultado{
    color: green;
    font-weight: bolder;
    font-size: 32px;
}
</style>
<?php
	function calcular($numero1, $numero2, $operacion){
        if ( !strcmp("Suma", $operacion) ){ //Si el tipo de operacion es Suma...
            echo "<p class='resultado'>El resultado de $numero1 + $numero2 es: " . ($numero1 + $numero2 ) . "</p>";
        }
       if ( !strcmp("Resta", $operacion) ){ //Si el tipo de operacion es Resta...
            echo "<p class='resultado'>El resultado de $numero1 - $numero2 es: " . ($numero1 - $numero2 ) . "</p>";
        }
        if ( !strcmp("Multiplicación", $operacion) ){ //Si el tipo de operacion es Multiplicación...
            echo "<p class='resultado'>El resultado de $numero1 * $numero2 es: " . ($numero1 * $numero2 ) . "</p>";
        }
        if ( !strcmp("División", $operacion) ){ //Si el tipo de operacion es División...
            echo "<p class='resultado'>El resultado de $numero1 / $numero2 es: " . ($numero1 / $numero2 ) . "</p>";
        }
        if ( !strcmp("Módulo", $operacion) ){ //Si el tipo de operacion es Módulo...
            echo "<p class='resultado'>El resultado de $numero1 % $numero2 es: " . ($numero1 % $numero2 ) . "</p>";
        }
        if ( !strcmp("Incremento", $operacion) ){ //Si el tipo de operacion es Incremento...
            $antes = $numero1;
            $numero1++;
            echo "<p class='resultado'>El resultado de $antes++ es: " . $numero1 . "</p>";
        }
        if ( !strcmp("Decremento", $operacion) ){ //Si el tipo de operacion es Decremento...
            $antes = $numero1;
            $numero1--;
            echo "<p class='resultado'>El resultado de $antes-- es: " . $numero1-- . "</p>";
        }
    }
 ?>