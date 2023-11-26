<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
    <!-- <p>
        Realizar un script en PHP se obtenga un número aleatorio entre 1 y 100.
        Deberá mostrarse en pantalla el número generado y la suma de todos los números
        pares anteriores a él.
    </p> -->
</head>
<body>
    <?php
        $suma=0;
        $num=rand(1,100);
        echo $num. '</br>';
        for($i=$num;$i>0;$i--){
            if($i%2==0){
                $suma=$suma+$i;
            }
        }
        echo 'la suma de los numeros pares anteriores es: '. $suma;
    ?>
</body>
</html>