<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
    <!-- <p>
    Realizar un programa en php que escriba por pantalla la sucesión de Fibonacci. Cada 
    número de la serie de Fibonacci se forma sumando los dos números anteriores.
    </p> -->
</head>
<body>
    <?php
        for($i=1;$i<1000;$i++){
            $suma=$suma+$i;
            echo ($suma." ");
        }
    ?>
</body>
</html>