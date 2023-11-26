<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <!-- <p>
    Realiza un programa en php que dados dos números indique cuál de dos números es el 
    mayor. Inicialmente el programa mostrará el valor de los números y a continuación 
    indicará: El número _ es mayor que el número _. 
    </p> -->
</head>
<body>
    <?php
        $num1=3;
        $num2=1;
        if($num1>$num2){
            echo($num1."</br>");
            echo("El número ".$num1." es mayor que el número ".$num2);
        }
        if($num2>$num1){
            echo($num2."</br>");
            echo("El número ".$num2." es mayor que el número ".$num1);
        }
    ?>    
</body>
</html>