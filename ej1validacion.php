<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $documento=$_POST['dni'];
    function validacion($documento) {
        
        $documento = str_replace(' ', '', $documento);

        $tamaño = strlen($documento);
        if ($tamaño !== 9 && $tamaño !== 8) {
            return false;
        }

        // Extraer la letra y los números
        $letra = strtoupper(substr($documento, -1));
        $numeros = substr($documento, 0, -1);

        // Validar NIE
        if ($tamaño === 8) {
            $patronNIE = '/^[XYZ]\d{7}[A-Z]$/';
            if (!preg_match($patronNIE, $documento)) {
                return false;
            }
        }

        // Validar DNI
        if ($tamaño === 9) {
            $patronDNI = '/^\d{8}[A-Z]$/';
            if (!preg_match($patronDNI, $documento)) {
                return false;
            }
        }

        // Calcular letra del DNI
        $letras = 'TRWAGMYFPDXBNJZSQVHLCKE';
        $indice = $numeros % 23;

        // Verificar letra del DNI
        if ($letra !== $letras[$indice]) {
            return false;
        }
        return true;
    }  
    echo validacion($documento);
}

?>