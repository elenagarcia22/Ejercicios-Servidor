<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
   <!-- <p>
        Realiza un programa en php donde dada la cadena: “Estamos dando nuestros primeros 
        pasos en programación utilizando el lenguaje php” imprima por pantalla:
        • La longitud de la cadena.
        • La primera ocurrencia de “os”.
        • La búsqueda de la palabra “nuestros”.
        • La subcadena “lenguaje php”.
        • La subcadena “nuestros primeros pasos”.
        • El reemplazo de las palabras estamos por estoy y nuestros por mis.
        • Todas las letras de la cadena en minúsculas.
        • Todas las letras de la cadena en mayúsculas
        • La frase con todas las letras iniciales de cada palabra en mayúscula
    </p>-->
</head>
<body>
    <?php
        $cadena= 'Estamos dando nuestros primeros pasos en programación utilizando el lenguaje php';
        //longitud de la cadena
        echo strlen($cadena)."</br>";
        //primera ocurrencia de os
        $posicion = strpos($cadena, "os");
        if($posicion==true){
            echo 'os aparece en la posicion: '. $posicion."</br>";
        }
        else echo'no se ha encontrado el valor en la cadena';
        // busca la palabra nuestros
        $palabra = strpos($cadena, "nuestros");
        if($palabra==true){
            echo 'nosotros aparece en la posicion: '. $palabra."</br>";
        }
        else echo'no se ha encontrado el valor en la cadena';
        //subcadena lenguaje php
        $s1='lenguaje php';
        $subcadena1 = strpos($cadena, $s1);
        if($subcadena1==true){
            echo 'lenguaje php aparece en la posicion: '. $subcadena1."</br>";
        }
        else echo'no se ha encontrado la subcadena en la cadena';
        //subcadena nuestros primeros pasos
        $s2='nuestros primeros pasos';
        $subcadena2 = strpos($cadena, $s2);
        if($subcadena2==true){
            echo 'nuestros primeros pasos aparece en la posicion: '. $subcadena2."</br>";
        }
        else echo'no se ha encontrado la subcadena en la cadena';
        //sustituye las palabras estamos por estoy y nuestros por mis.
        $nuevos=array('Estoy','mis');
        $cambio=array('Estamos','nuestros');
        $newphrase = str_replace($cambio, $nuevos, $cadena);
        echo $newphrase."</br>";
        //Todas las letras de la cadena en minúsculas.
        echo strtolower($cadena)."</br>";
        //Todas las letras de la cadena en mayúsculas
        echo strtoupper($cadena)."</br>";
        //La frase con todas las letras iniciales de cada palabra en mayúscula
        strtolower($cadena);       
        echo  ucwords($cadena)."</br>";

    ?>
</body>
</html>