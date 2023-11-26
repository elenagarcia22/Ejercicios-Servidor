<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <style>
    table{
        border-collapse:collapse;
    }
    td{
        text-align:center;
        padding:4px;
        border:1px solid #000;
    }
   </style>
    <?php
    $numero_unico = [];
    $numerosRepetidos=[];

    
    while (count($numero_unico) < 20) {
        $numAleaotorio = mt_rand(1, 30); 
    
        
        if (!in_array($numAleaotorio, $numero_unico)) {
            $numero_unico[] = $numAleaotorio;
        }
        else{
            $numerosRepetidos []=$numAleaotorio;  
        }
    }
    rsort($numero_unico);
        echo "<table>
        <tr>";

        foreach ($numero_unico as $numero) {
            
                if ($numero % 2 == 0) {
                    $color='green';
                } else {
                    $color='red';
                }
                
                echo "<td style='color:$color'>$numero</td>";
        }
        
        echo "</tr></table></br>";
        echo "<table>";
        asort($numerosRepetidos);
        $contador=array_count_values($numerosRepetidos);
        foreach ($contador as $repetidos=>$valor ) {
            
            if (in_array($repetidos, $numero_unico)) {
                echo "<tr><td>$repetidos</td>";
                echo "<td>$valor veces</td> </tr>";
            }
        }
        "</table>";
        //print_r($numerosRepetidos);
    ?>
    
</body>
</html>