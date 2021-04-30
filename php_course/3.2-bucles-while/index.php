
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">

        <?php 
          $frutas = array('uva', 'pera', 'mago', 'manzana', 'papaya', 'naranja');

          $index = 0;

          while($index < count($frutas)){
              echo $frutas[$index] ."<br>";
              $index++;
          }
        ?>


    </div>
</body>
</html>