<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
    <!-- <p>
        Realiza un programa en php en el que se declare un vector de 5 posiciones. Cada 
        posición tomará como valor un color distinto (azul, rojo, verde, rosa, naranja). A 
        continuación, deberá de comprobar si el valor rosa se encuentra almacenado en el array. 
        Si es así, deberá de borrar el elemento del array.
    </p> -->
</head>
<body>
    <?php
        $colores=array('azul','rojo','verde','rosa','naranja');
        $color='rosa';
        $valor=array_search($color,$colores);
        if($valor==true){
            unset($colores[$valor]);
            print_r($colores);
        }
    ?>
</body>
</html>