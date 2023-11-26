<html>
   <head>
        <?php
        /*Crear un array asociativo de dos dimensiones. La clave de la primera dimensión será el
        código de empleado que tendrá el formato “CExxxx” donde xxxx es un número de 4 
        cifras.
        La segunda dimensión contiene un array asociativo con claves “nombre”, “edad” y 
        “salario” cuyo contenido será el nombre, la edad y el salario del empleado.
        Hacer una función en PHP que reciba como parámetros el nombre, la edad y el salario 
        de un empleado, y calcula un nuevo salario para esa persona en base a su situación:
        o Si el salario es mayor de 2.000€, no cambiará.
        o Si el salario está entre 1.000 y 2.000€:
        ▪ Si además la edad es mayor de 45 años se sube un 4%.
        ▪ Si la edad es menor o igual que 45 años se sube un 10%
        o Si el salario es menor de 1.000€:
        ▪ Los menores de 30 años cobrarán a partir de entonces exactamente 1.500€.
        ▪ De 30 a 45 años sube un 3%.
        ▪ A los mayores de 45 años sube un 15%.
        La función debe actualizar en el array los valores en caso de cambio y mostrar en 
        pantalla los nombres y el nuevo salario de los que han sufrido modificaciones */
            function calculaSalario($nombre,$edad,&$salario){
                if ($salario<2000 && $salario>1000){
                    if($edad>45){
                        $salario=$salario+$salario*0.04;
                    }
                    elseif($edad<45){
                        $salario=$salario+$salario*0.10;
                    }

                }
                elseif ($salario<1000){
                    if($edad>30){
                        $salario=1500;
                    }
                    elseif($edad<=45 && $edad>=30){
                        $salario=$salario+$salario*0.03;
                    }
                    elseif($edad>45){
                        $salario=$salario+$salario*0.15;
                    }

                }
                return $salario;
            }

        ?>
   </head>
   <body>
        <?php
            $listado=array("CE1234"=> array("nombre"=>"pablo","edad"=>"31","salario"=>"2341"),
            "CE1334"=> array("nombre"=>"mar","edad"=>"20","salario"=>"1023"));
            foreach ($listado as $codigo => &$empleado) {
                $nombre = $empleado['nombre'];
                $edad = $empleado['edad'];
                $salario = &$empleado['salario'];
                calculaSalario($nombre,$edad,$salario);
                echo "Empleado: $nombre, Edad: $edad, Nuevo Salario: $salario </br>";
            }
            
            
        ?>
   </body>
</html>