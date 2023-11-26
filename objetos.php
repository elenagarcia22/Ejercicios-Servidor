<?php
class Alumno{

    public $nombre;
    public $apellido;
    const CICLO="daw";
    public static $id=408;

    function __construct($nom,$ape){
        $this->nombre= $nom;
        $this->apellido= $ape;
        ++self::$id;
        
    }
    function datosAlumno(){
        return "los datos del alumno son: " . $this->nombre . " " . $this->apellido." ". Alumno::$id;

    }
    function getNombre(){
        return $this->nombre;
    }
    function setNombre($nom){
        $this->nombre= $nom;
    }
    function __set($nom,$val1){
        $this->nombre=$val1;
    }
    function __get($nombre){

    }
    function __toString(){
        return $this->nombre. " ".$this->apellido ." ". Alumno::$id;
    }

}


?>