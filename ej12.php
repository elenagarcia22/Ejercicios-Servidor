<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
    <!-- <p>
        Realiza un programa en php en el que se declare un vector donde en cada posición se 
        almacene un día de la semana. A continuación, imprima la posición que corresponda 
        para que en pantalla se muestre: miércoles
    </p> -->
</head>
<body>
    <?php
        $diasSemana=array('lunes','martes','miercoles','jueves','viernes','sabado','domingo');
        //opcion 1
        echo $diasSemana[2]."</br>";
        //opcion 2
        $posicion = array_search("miercoles", $diasSemana);
        if ($posicion !== false) {
            echo "La posición para 'miércoles' es: $posicion\n";
        } else {
            echo "'miércoles' no se encontró en el vector de días de la semana\n";
        }
    ?>
</body>
</html>