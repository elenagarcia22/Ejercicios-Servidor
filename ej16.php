<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
    <!--<p>
        Realiza una matriz de 3 filas por 4 columnas. El contenido de cada uno de los elementos 
        de la matriz se generará de manera aleatoria. Una vez generada: 
        • Muestra el contenido de la matriz en formato filas x columnas
        • Identifica el número mayor y menor generado dentro de la matriz
        • Calcula la media de los números impares contenidos en la matriz
        • Imprime únicamente la diagonal 
        • Imprime únicamente la primera columna
    </p>-->
</head>
<body>
    <?php
        
        $matriz = array();
        $numeros=array();
        //crear la matriz
        for ($i = 0; $i < 3; $i++) {
            $matriz[$i] = array();
            for ($j = 0; $j < 4; $j++) {
                $num=rand(1,100);
                $matriz[$i][$j] = $num;
            }
        }
        //mostrar el conenido
        foreach($matriz as $fila){
            echo implode("\t",$fila).'</br>';
        }
        // numero mayor y menor
        $mayor = $matriz[0][0];
        $menor = $matriz[0][0];

        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 4; $j++) {
                $numero = $matriz[$i][$j];
                $mayor = max($mayor, $numero);
                $menor = min($menor, $numero);
            }
        }
        echo 'el numero mayor es: '.$mayor.' y el numero menor es: '.$menor.'</br>';
        //media de los números impares 
        $suma=0;
        $cont=0;
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 4; $j++) {
                $numero = $matriz[$i][$j];
                if($numero%2!=0){
                    $suma=$suma+$numero;
                    $cont++;
                }
            }
        }
        $media=$suma/$cont;
        echo 'la media es: '.$media.'</br>';
        // diagonal 
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 4; $j++) {
                if($i==$j){
                    echo $matriz[$i][$j].' ';
                }
            }
        }
        echo '</br>';
        //primera columna
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 4; $j++) {
                if($j==0){
                    echo $matriz[$i][$j].' ';
                }
            }
        }
        echo '</br>';        
    ?>    
</body>
</html>