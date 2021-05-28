<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

function incrementar1($valor): int
{
    $valor++;
    return $valor;
}

$num1 = 5;
echo  incrementar1($num1) ."<br>";;



function incrementar2(&$valor): int
{
    $valor++;
    return $valor;
}
$num2 = 10;

echo  incrementar2($num2) ."<br>";
echo  $num2;


$n1 = 20;
$n2 = &$n1;
$n2 = 100;
echo "<br> N1: ". $n1;




?>





</body>
</html>
