<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
    <!-- <p>
        Almacena en un vector los 10 primeros número pares. Imprímalos cada uno en una línea
    </p> -->
</head>
<body>
    <?php
        $numerosPares=array(0,2,4,6,8,10,12,14,16,18);
        for ($i=0;$i<10;$i++){
            echo $numerosPares[$i].'</br>';
        }
    ?>
</body>
</html>