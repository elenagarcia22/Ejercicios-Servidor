<html>
    <head>
        <title>Formulario</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="post">
            <input type="hidden" value="oculto" name="oculto"/>
            <input value="<?php isset($_POST['numero']? $_POST['numero']) : ?>" type="text" name="numero">
            <input type="submit" name="btnEnviar" value="Calcular"/>
        </form>
        <?php
            $num=$_POST["numero"];
            $suma="0";
            for($i=2;$i<$num;$i=$i+2){
                $suma=$suma+$i;
            }
            echo $suma;

        ?>

    </body>
</html>