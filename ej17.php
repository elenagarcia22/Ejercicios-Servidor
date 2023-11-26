<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
    <!-- <p>
        Crea un array asociativo que contenga la siguiente información:
        Array supermercado: 
        Fruta (Pera, Manzana, Plátano)
        Verdura (Berenjena, Calabacín)
        Lácteos (leche, yogur, queso, kéfir)
        Muestra el array en pantalla haciendo uso del bucle foreach
    </p> -->
</head>
<body>
    <?php
        $supermercados=array('fruta'=>'Pera',' Manzana', 'Plátano',
                            'verdura'=>'Berenjena', 'Calabacín',
                            'lacteos' =>'leche', 'yogur', 'queso', 'kéfir');
        foreach($supermercados as $clave=> $valor){
            echo $clave. " ".$valor.' ';
        }
    ?>
</body>
</html>