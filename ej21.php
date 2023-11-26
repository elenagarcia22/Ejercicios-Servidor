<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Crea una pequeña agenda electrónica utilizando arrays asociativos multidimensionales.
    Los datos a guardar para cada contacto son: nombre, apellidos, teléfono, correo 
    electrónico.
    Debe mostrarse en pantalla los datos guardados en la agenda -->
    <?php
        // Función para verificar si el dominio del correo es válido
        function c($correo){   
            $validos=array("@gmail.com","@educa.madrid.org","@hotmail.com","@yahoo.com");   
            $posicion=strpos($correo,"@") ;
            $fincorreo=substr($correo,$posicion);
            return in_array($fincorreo,$validos); 
        }
    ?>
    <style>
        table,th,tr,td{
            table_layout:fixed;
            width: 400px;
            border-collapse:collapse;
            border:1px solid;
            text-align:center;

        }
    </style>
</head>
<body>
    <?php
        $agenda = array("0" => array("nombre"=>"Jorge","direccion"=>"madrid","telefono"=>999999999,"correo"=>"jorge@correo.com"),
        "1" => array("nombre"=>"julia","direccion"=>"valencia","telefono"=>235456987,"correo"=>"julia@gmail.com"),
        "2" => array("nombre"=>"Jorge","direccion"=>"orense","telefono"=>222222222,"correo"=>"lucas@gmail.com"),
        "3" => array("nombre"=>"Jorge","direccion"=>"avila","telefono"=>987546321,"correo"=>"susana@correo.com"),
        );
        $contador=0;
        foreach($agenda as $clave=>$valor){
          $contador+= c($valor["correo"]);
                     
        }
        echo $contador;

        echo "<table>
                <th colspan='3'> agenda </th>
                <tr> 
                    <td> clave </td>
                    <td> clave </td>
                    <td> contenido </td>
                </tr>";
                foreach($agenda as $cod=>$valor){
                    echo 
                    "<tr> 
                    <td rowspan='4'>".$cod." </td>";
                    foreach($valor as $dat=>$inf){
                        echo 
                        "<td>".$dat."</td>
                        <td>".$inf."</td>
                        </tr>";

                    }
                }
    ?>
    
       
</body>
</html>
