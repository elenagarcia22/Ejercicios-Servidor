<?php
include "objetos.php";

        
$alumno=new Alumno("Pepe","Gonzalez");
echo $alumno . "</br>";
$alumno1=new Alumno("ana","Gonzalez");
echo $alumno1 . "</br>";
$alumno2=new Alumno("mar","Gonzalez");
echo $alumno2 . "</br>";
$alumno3=new Alumno("Paula","Gonzalez");
echo $alumno3 . "</br>";
//echo $alumno->datosAlumno() . "</br>";
//echo "Apellido: " . $alumno->apellido . "</br>";
//echo "nombre: " . $alumno->getNombre() . "</br>";
//echo "soy del ciclo ". Alumno::CICLO . "</br>";
// $alumno->nombre="mar";




?>