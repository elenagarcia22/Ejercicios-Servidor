<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <!-- <p>
    Sabiendo que la funcion RAND nos retorna un valor aleatorio entre un rango de dos 
    enteros: Almacena en una variable un valor entero que la computadora genera de forma 
    aleatoria entre 1 y 100. Hacer un programa que muestre por pantalla el valor generado. 
    Mostrar además si es menor o igual a 50 o si es mayor. 
    </p> -->
</head>
<body>
    <?php
        $num=rand(1,100);
        echo($num."</br>");
        if($num<=50){
            echo (" el numero es menor o igual que 50");
        }
        else echo("el numero es mayor que 50");
    ?>    
</body>
</html>