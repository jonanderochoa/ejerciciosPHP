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
	if( isset($_POST["button"]) ) {	//Si se a enviado el formulario...
        $numero1 = $_POST['num1'];
        $numero2 = $_POST['num2'];
        $operacion = $_POST['operacion'];
            
        calcular($numero1, $numero2, $operacion);
        }

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
    }
 ?>