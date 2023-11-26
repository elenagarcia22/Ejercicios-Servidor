<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--El número de veces indicado en el cuadro de texto tendrá que imprimirse la frase “Los bucles 
    son fáciles”. Para finalizar se escribirá por pantalla la frase “Se acabó”. 
    • El código php y el código html deberán de estar en dos ficheros distintos. 
    • Utilizar la sentencia WHILE
    • Para recoger el dato metido en el cuadro de texto se utiliza la instrucción $_POST. 
    Ejemplo: $number = $_POST['number']; siendo number el name puesto al cuadro 
    de texto.-->
</head>
<body>
    <form method='post' action="ej1php.php">
        ¿cuantas veces?
        <input type="text" name='num'>
        <input type="submit" name='btnEnviar' value='enviar'>
    </form>
   <?php
    include("ej1php.php");
   ?>
</body>
</html>