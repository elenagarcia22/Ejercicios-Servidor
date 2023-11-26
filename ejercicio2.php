<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cuenta</title>
    <!--Escribe una clase Cuenta para representar una cuenta bancaria. Los datos de la cuenta son: 
    nombre del cliente (String), número de cuenta (String), tipo de interés (double) y saldo (double).
    La clase contendrá los siguientes métodos:
    • Constructor con todos los parámetros
    • Métodos setters/getters para asignar y obtener los datos de la cuenta.
    • Métodos ingreso y reintegro. Un ingreso consiste en aumentar el saldo en la cantidad 
    que se indique. Esa cantidad no puede ser negativa. Un reintegro consiste en disminuir 
    el saldo en una cantidad pero antes se debe comprobar que hay saldo suficiente. La 
    cantidad no puede ser negativa. Los métodos ingreso y reintegro devuelven true si la 
    operación se ha podido realizar o false en caso contrario.
    Crea 2 instancias para validar el funcionamiento del programa.
    -->
</head>
<body>
    <?php
        class Cuenta{
            private $nombre;
            private $numCuenta;
            private $interes;
            private $saldo;
            // Constructor con todos los parámetros
            public function __constructor($nombre,$numCuenta,$interes,$saldo){
                $this->nombre=$nombre;
                $this->numCuenta=$numCuenta;
                $this->interes=$interes;
                $this->saldo=$saldo;
            }
            //metodo string
            public function __toString(){
                return   $this->nombre." ".$this->numCuenta." ".$this->interes." ".$this->saldo;
            }
            //Métodos setters/getters 
            public function getNombre(){
                return $this -> nombre;
            }
            public function setNombre($nombre){
                $this->nombre=$nombre;
            }
            public function getNumCuenta(){
                return $this -> numCuenta;
            }
            public function setNumCuenta($numCuenta){
                $this->numCuenta=$numCuenta;
            }
            public function getInteres(){
                return $this -> interes;
            }
            public function setInteres($interes){
                $this->interes=$interes;
            }
            public function getSaldo(){
                return $this -> saldo;
            }
            public function setSaldo($saldo){
                $this->saldo=$saldo;
            }
            //Funciones de ingreso y reintegro
            public function ingreso($num){
                if($num>0){    
                    $this->saldo+=$num;                
                    return true;
                }
                else return false;
            }
            public function reintegro($num){
                if($num>0 && $this->saldo>=$num ){
                    $this->saldo-=$num; 
                    return true;
                }
                else return false;
            }
            
        }
        $cuenta1 = new Cuenta("Cliente1", "43572", 0.03, 1000.0);
        $cuenta2 = new Cuenta("Cliente2", "13256", 0.04, 2000.0);
        echo $cuenta1;
        echo $cuenta2;
        // Realizar ingresos y reintegros en las cuentas
        $cuenta1->ingreso(500.0);
        $cuenta2->reintegro(300.0);

        // Mostrar el saldo actual de las cuentas
        echo "Saldo de cuenta1: " . $cuenta1->getSaldo() . "\n";
        echo "Saldo de cuenta2: " . $cuenta2->getSaldo() . "\n";
    ?>
</body>
</html>