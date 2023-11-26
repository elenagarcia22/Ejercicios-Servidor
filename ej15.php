<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
    <!-- <p>
        Realiza un programa en php en el que se declare un vector que contenga los siguientes 
        cuatro elementos: índice: 1 valor: 90, índice: 30 valor: 7, índice: ‘e’ valor 99, índice: 
        ‘hola’, valor:43. A continuación imprime los valores con sus índices asociado utilizando 
        la estructura de control foreach. El resultado debe de mostrar: 
        El elemento de índice _ vale _. 
    </p> -->
</head>
<body>
    <?php
        $elementos=array(1 => 90,
                        30 => 7,
                        'e' => 99,
                        'hola' => 43);
        foreach($elementos as $indice => $valor){
            echo 'el elemento de indice '. $indice .' vale '.$valor.'</br>';
        }
    ?>
</body>
</html>