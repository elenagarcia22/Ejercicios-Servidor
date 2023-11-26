<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercio 3</title>
    <!--<p>
    Realiza un programa en php que dados dos números calcule la suma, la resta, la 
    multiplicación, la división y el módulo y muestre los resta$restaados obtenidos. El programa 
    debe cumplir los siguientes requisitos:
        <ul>
            <li>La suma se realizará dentro del propio body</li>
            <li>La resta se realizará mediante una función en el head y se llamará desde el body sin parámetros</li>
            <li>La multiplicación se realizará mediante una función en el head y se llamará desde el body con parámetros (los valores de la multiplicación)</li>
            <li>La división y el módulo se realizarán en ficheros externos y se llamarán mediante include.</li>
        </ul>    
    </p>-->
    <?php

    global $num1, $num2;

    $num1 = 4;
    $num2 = 5;

    function resta() {
        global $num1, $num2;
        $resta = $num2 - $num1;
        return $resta;
    }

    
    function multiplicacion($mult1, $mult2) {
        $multiplicacion = $mult1 * $mult2;
        echo($multiplicacion . "</br>");
    }
?>


<body>
    <?php
        
        global $suma;
        $suma = $num1 + $num2;

        echo($suma . "</br>");

        echo resta() . "</br>";

        multiplicacion(1, 4);

        include("ficheroej3.php");
    ?>
</body>
</html>
