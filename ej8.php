<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
    <!-- <p>
    Realizar un programa en php donde se declare la variable posición. Esta variable puede 
    tomar los valores arriba o abajo. Imprimir el valor que toma variable. Si no toma ninguno 
    de estos dos valores imprimir por pantalla: “La variable contiene otro valor distinto de 
    arriba y abajo”. Realizar el ejercicio utilizando la sentencia SWITCH.
    </p> -->
</head>
<body>
    <?php
        $posicion="arriba";
        switch($posicion){
            case "arriba":
                echo("La variable es arriba");
                break;
            case "abajo":
                echo ("la variable es abajo");
                break;
            default: 
                echo("La variable contiene otro valor distinto de arriba y abajo");
                break;
        }
    ?>
</body>
</html>