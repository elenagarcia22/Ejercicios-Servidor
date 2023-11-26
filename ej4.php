<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <!-- <p>
    Realiza un programa en php que calcule el sueldo neto de un trabajador al cual se le 
    aplica una retención del 22%. Supón que el sueldo bruto son 2750€. Mostrar por 
    pantalla el sueldo inicial, el impuesto aplicado y el sueldo neto. Dar formato html a los 
    resultados obtenidos.
    </p> -->
</head>
<body>
    <?php
        $sueldoBruto=2750;
        $retencion=22;
        $sueldoNeto=$sueldoBruto-($sueldoBruto*($retencion/100));
        echo("el sueldo inicial es de: ".$sueldoBruto." euros, el impuesto aplicado es de: ".$retencion."%, y el sueldo neto es: ".$sueldoNeto." euros");
    ?>
</body>
</html>