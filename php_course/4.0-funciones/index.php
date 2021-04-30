
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- funciones simples -->
    <h2>Funciones parte 1</h2>
    <?php 
        function saludar(){
            echo "Hola, carlos, te saludo desde una funcion de PHP";
        }

        function suma(){
            echo 2+2;
        }
        suma();
        echo "<br>";
        saludar();
    ?>


    <!-- funciones con argumento -->
    <h2>Funciones partes 2  -- pasanso parametros</h2>
    <?php 
        
        function sumar($num1, $num2){
            echo $num1+$num2 ."<br>";
        }
        sumar(3, 4);
        sumar(10, 100);
    ?>

     <!-- funciones con argumento -->
     <h2>Funciones parte 3 --- retornando valores</h2>
    <?php 
        
        function cal_area_triangulo($base, $altura){
            return $base *  $altura / 2;
        }
        $area1 = cal_area_triangulo(2, 2);
        $area2 = cal_area_triangulo(10, 2);
        
        echo "
        <b>AREA 1: </b> {$area1} <br>
        <b>AREA 2: </b> {$area2} 
        "

    ?>

</body>
</html>