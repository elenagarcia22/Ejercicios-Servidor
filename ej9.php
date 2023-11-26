<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
    <!-- <p>
    Realizar un programa en php donde dado un número del 1 al 7 indique a que día de la 
    semana corresponde. Si el número no está entre 1 y 7 el programa lo deberá de indicar. 
    </p> -->
</head>
<body>
    <?php
        $diasSemana=["lunes","martes","miercoles","jueves","viernes","sabado","domingo"];
        $num=5;
        if($num<=6){
            echo($diasSemana[$num]);
        }
        else echo("el numero no es valido");
    ?>    
</body>
</html>