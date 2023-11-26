<?php
    /*Crear un array de 20 elementos que contenga números aleatorios entre 1 y 30 sin 
    repetir. Mostrarlo en pantalla ordenado descendentemente. Los números impares se 
    mostrarán en color rojo y los pares en color verde. Mostrar en pantalla cuántos números 
    salieron repetidos al generar el array y cuáles fueron. 
    Utiliza funciones de usuario.*/
    function generarNumerosAleatorios($cantidad) {
        $numeros = [];
        $numerosRepetidos=[];

        
        while (count($numeros) < 20) {
            $numAleaotorio = mt_rand(1, 30); 
        
            
            if (!in_array($numAleaotorio, $numeros)) {
                $numeros[] = $numAleaotorio;
            }
            else{
                $numerosRepetidos []=$numAleaotorio;  
            }
        }
        rsort($numeros);
        mostrarNumerosConColores($numeros);
        mostrarRepetidos($numerosRepetidos);
        
    }
    function mostrarNumerosConColores($numeros) {
        foreach ($numeros as $numero) {
            if ($numero % 2 == 0) {
                echo "<font color='green'> ".$numero."</font>";
            } else {
                echo "<font color='red'> ".$numero."</font>";
            }
        }
        echo "</br>";
    }
    function mostrarRepetidos($numerosRepetidos, $numeros = []) {
        $contador = array_count_values($numerosRepetidos);
        foreach ($contador as $repetido => $valor) {
            if (in_array($repetido, $numeros)) {
                echo "$repetido: $valor veces <br>";
            }
        }        
    }
    generarNumerosAleatorios(20);
   
?>