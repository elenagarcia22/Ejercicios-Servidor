<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <p>Realizar un script que simule el tradicional juego de piedra papel o tijeras. 
    • Habrá un único jugador que jugará contra la máquina y podrán jugar todas las veces que 
    se desee. Al jugador se le mostrarán las tres opciones posibles entre las que deberá 
    seleccionar una, y un botón “Jugar” para enviar al servidor la jugada realizada. Una vez 
    terminada la partida, se volverán a mostrar las opciones y el botón para volver a jugar.
    • En el servidor se generará una jugada aleatoria de las tres posibles y se comparará con 
    la introducida por el usuario.
    • La página que se devuelve al usuario mostrará, el texto “Has elegido XXX y la máquina 
    ha elegido YYY” y a continuación, si el resultado ha sido que ha habido empate, ha 
    ganado el jugador o ha ganado la máquina.
    Se dará la posibilidad de realizar una partida larga (al mejor de 5 por ejemplo), para ello el 
    sistema debe ser capaz de mostrar el número de partidas ganadas, empatadas y perdidas que 
    lleva el usuario y la máquina en cada una de las rondas.</p>
</head>
<body>
    
    <?php
        $contador=1;
        do{
        if (isset ($_POST['Jugar'])){            

            $jugador=array("Ganadas"=>(int)($_POST['Ugana']??0),
                        "Perdidas"=>(int)($_POST['Upierde']??0),
                        "Empate"=>(int)($_POST['Uempata']??0));
            $maq=array("Ganadas"=>(int)($_POST['Mgana']??0),
                        "Perdidas"=>(int)($_POST['Mpierde']??0),
                        "Empate"=>(int)($_POST['Mempata']??0));
            
            $maquina=rand(1,3);
            
            
            if(isset ($_POST['Piedra'])){
                echo 'USUARIO: Piedra<br>';
            }
            else if(isset ($_POST['Papel'])){
                echo 'USUARIO: Papel<br>';
            }
            else if(isset ($_POST['Tijera'])){
                echo 'USUARIO: Tijera<br>';
            }

            if($maquina==1){
                echo 'ORDENADOR: Piedra<br>';
            }
            else if($maquina==2){
                echo 'ORDENADOR: Papel<br>';
            }
            else if($maquina==3){
                echo 'ORDENADOR: Tijera<br>';
            }


            //empate
            if((isset ($_POST['Piedra'])&&$maquina==1)||
            (isset ($_POST['Papel'])&&$maquina==2)||
            (isset ($_POST['Tijera'])&&$maquina==3)){
                echo 'Empate<br>';
                $jugador["Empate"]++;
                $maq["Empate"]++;
            }
            //usuario gana
            else if((isset ($_POST['Piedra'])&&$maquina==3)||
                    (isset ($_POST['Papel'])&&$maquina==1)||
                    (isset ($_POST['Tijera'])&&$maquina==2)){
            
                echo 'Gana usuario'.'</br>';
                
                $jugador["Ganadas"]++;
                $maq["Perdidas"]++;
            }
            //maquina gana
            else if((isset ($_POST['Tijera'])&&$maquina==1)||
                    (isset ($_POST['Piedra'])&&$maquina==2)||
                    (isset ($_POST['Papel'])&&$maquina==3)){
                
                echo 'Gana ordenador'.'</br>';
                $jugador["Perdidas"]++;
                $maq["Ganadas"]++;
            }
            //muestra
            echo "<h3>Resultado jugador</h3> ";
            foreach($jugador as $clave=>$valor){
                
                echo $clave.": ".$valor."</br>";
            }
            echo "<h3>Resultado maquina</h3>";
            foreach($maq as $clave=>$valor){
                
                echo $clave.": ".$valor."</br>";
            }

            $contador++;
            //echo 'Valor de jugada del ordenador: ' . $maquina . "<br/>\n";
        }
    }while($contador=5);


    ?>
        


    <h4>Elige una opción </h4>
    <form method ="POST" >
                <input type="hidden" name="Mgana" value="<?=$maq["Ganadas"]??0?>"/>
                <input type="hidden" name="Mpierde" value="<?=$maq["Perdidas"]??0?>"/>
                <input type="hidden" name="Mempata" value="<?=$maq["Empate"]??0?>"/>
                <input type="hidden" name="Ugana" value="<?=$jugador["Ganadas"]??0?>"/>
                <input type="hidden" name="Upierde" value="<?=$jugador["Perdidas"]??0?>"/>
                <input type="hidden" name="Uempata" value="<?=$jugador["Empate"]??0?>"/>

                <input type=checkbox name="Piedra" value="1">Piedra<br>
                <input type=checkbox name="Papel" value="2">Papel<br>
                <input type=checkbox name="Tijera" value="3">Tijera<br>
                <input type=submit name="Jugar" value="Jugar"/>
        
    </form>


    
</body>
</html>