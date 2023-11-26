<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
    <!-- <p>
    Realizar un programa en php en el que dado un número entero positivo determine si es 
    par o impar. Si el número no es un entero positivo deberá de mostrar un mensaje 
    indicándolo (la función is_integer puede ayudarte)
    </p> -->
</head>
<body>
    <?php
        $num=35;
        if(is_integer($num)==1){
            echo("el numero: ".$num." es entero");
        }
        else echo("el numero: ".$num." no es entero");
       
    ?>
</body>
</html>