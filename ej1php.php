<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $num=$_POST['num']? intval($_POST['num']) : 0;
        if ($num > 0) {
            // Iniciar el bucle while
            $count = 0;
            while ($count < $num) {
                echo "Los bucles son fáciles<br>";
                $count++;
            }
            echo 'se acabo';
        }
        
    }
?>