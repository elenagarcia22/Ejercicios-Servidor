<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 20</title>
    <!-- <p>
        Haz un programa que muestre 2000 cuadrados de colores aleatorios que además se 
        coloquen en posiciones aleatorias por la pantalla.
        • El tamaño de los cuadrados será 50x50 píxeles.
        • Las posiciones aleatorias se calcularán entre 0 y 100 que representa el porcentaje 
        (0% -100%) para posiciones absolutas, relativa, o fixed de los atributos left y top 
        de los cuadrados.
        • Los colores aleatorios se calculan obteniendo un número aleatorio entre 0 y 255 
        para cada valor RGB.
    </p> -->
    <style>
    .square {
      position: absolute;
      width: 50px;
      height: 50px;
    }
  </style>
</head>
<body>
    <?php
         // Función para generar un número aleatorio entre min y max
        function numeroAleatorio($min, $max) {
            return rand($min, $max);
        }
    
        // Función para generar un color RGB aleatorio
        function colorAleatorio() {
            $r = numeroAleatorio(0, 255);
            $g = numeroAleatorio(0, 255);
            $b = numeroAleatorio(0, 255);
            return "rgb($r, $g, $b)";
        }
    
        // Crear 2000 cuadrados y colocarlos en posiciones y colores aleatorios
        for ($i = 0; $i < 2000; $i++) {
            $left = numeroAleatorio(0, 100);
            $top = numeroAleatorio(0, 100);
            $color = colorAleatorio();
    
            echo '<div class="square" style="left: ' . $left . '%; top: ' . $top . '%; background-color: ' . $color . ';"></div>';
        }
    ?>
</body>
</html>