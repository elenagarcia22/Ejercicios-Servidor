<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19</title>
    <!--<p>
        Busca cuatro imágenes en internet. Crea una página que muestre de forma aleatoria una de ellas.
    </p>-->
    <style>
        img{
            width:500px;
        }
    </style>
</head>
<body>
    <?php
        
        $num=rand(1,4);
        switch($num){
            case 1:{ 
                echo '<img src="https://th.bing.com/th/id/OIP.My7lN7GOn16w60PnKEK1_wHaFU?rs=1&pid=ImgDetMain" >';
                break;
            }
            case 2:{ 
                echo '<img src="https://th.bing.com/th/id/R.2c53dd4965b827bb62095c7eb294fd0f?rik=w1dd5SRR1qu2hA&pid=ImgRaw&r=0" >';
                break;
            }
            case 3:{ 
                echo '<img src="https://i.blogs.es/5d1cf1/0_0002/2560_3000.jpg" >';
                break;
            }
            case 4:{ 
                echo '<img src="https://th.bing.com/th/id/OIP.SesKoQl5R7fTFb-TmBbXXgHaEh?rs=1&pid=ImgDetMain" >';
                break;
            }

        }
    ?>
</body>
</html>