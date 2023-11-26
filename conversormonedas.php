<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>CONVERSOR DE MONEDAS: </h3>
    <form method="post" action="conversormonedas.php">
        <input type="number" min="1" name="n" id="n" value="<?=$n?>"/><br/>
        <input type="hidden" name="acum" value="<?=$acumulado?>">
        <input type="checkbox" name="bitcoin" value="0.00012">Bitcoin<br>
        <input type="checkbox" name="dolar" value="1.12">dolar<br>
        <input type="checkbox" name="libra" value="0.86">libra<br>
        <input type="checkbox" name="yen" value="120.02">yen<br>
        <input type="submit" name="enviar" value="enviar"/>
    </form>
    <?php
    if(isset($_POST['enviar'])){
        if(isset($_POST['bitcoin'])){
            echo "euros: ". $_POST['n']. " bitcoin: ". $_POST['bitcoin']*$_POST['n']."</br>";
        }
        if(isset($_POST['dolar'])){
            echo "euros: ". $_POST['n']. " dolar: ". $_POST['dolar']*$_POST['n']."</br>";
        }
        if(isset($_POST['libra'])){
            echo "euros: ". $_POST['n']. " libra: ". $_POST['libra']*$_POST['n']."</br>";
        }
        if(isset($_POST['yen'])){
            echo "euros: ". $_POST['n']. " yen: ". $_POST['yen']*$_POST['n']."</br>";
        }
    }
    ?>
</body>
</html>