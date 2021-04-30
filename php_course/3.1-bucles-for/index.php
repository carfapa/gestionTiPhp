
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
          $nums = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

          for($i=0; $i<count($nums); $i++ ){
              echo $nums[$i];
          }
          echo "<br>";
          for($i=0; $i<=500; $i++ ){
            if($i % 2 == 0){
                echo "El {$i} es par <br>";
                continue;
            }
            echo "El {$i} es impar <br>";

            
          }
        ?>


    </div>
</body>
</html>