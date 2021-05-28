

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <input type="number" name="num1" id="num1" placeholder="Numero 1">
        <input type="number" name="num2" id="num2" placeholder="Numero 2">
        <input type="submit" value="SUMAR" id="btn-sumar" name="btn-sumar">
    </form>

    <?php 

        if(isset($_GET['btn-sumar'])){
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2']; 
            $resultado = $num1 + $num2;

            echo "Suma= $resultado";
        }

   ?>


</body>
</html>