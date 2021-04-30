<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <?php

    $nt1=2; $nt2=5; $nfinal= 5;
    $promedio = $nt1 * 0.30 + $nt2 * 0.30 + $nfinal * 0.40;

    echo "PROMEDIO: ".$promedio;
    echo "<br><hr>";

    if($promedio >= 3)
    {
        echo "ESTADO: aprobado";
    }
    else
    {
        echo "ESTADO: reprobado";
    }
    echo "<br><hr>";


    if($promedio < 3)
    {
        echo "CATEGORIA: malo";
    }
    elseif ($promedio < 4)
    {
        echo "CATEGORIA: regular";
    }
    elseif ($promedio <= 4.5)
    {
        echo "CATEGORIA: bueno";
    }
    elseif ($promedio <= 5)
    {
        echo "CATEGORIA: excelente";
    }
    echo "<br><hr>";


    $num_rromano = 6;
    switch($num_rromano){
        case 1:
            echo "I";
            break;
        case 2:
            echo "II";
            break;
        case 3:
            echo "III";
            break;
        case 4:
            echo "IV";
            break;
        case 5:
            echo "V";
            break;
        case 6:
            echo "VI";
            break;
        case 7:
            echo "VII";
            break;
        case 8:
            echo "VII";
            break;
        case 9:
            echo "IX";
            break;
        case 10:
            echo "X";
            break;
        default:
            echo "No existe";
            break;
        
    }


    ?>

</body>
</html>