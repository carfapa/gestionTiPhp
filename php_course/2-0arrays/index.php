

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 
   
   $nums = [1, 2, 3, 4, 5];
   echo "Element Array Nums: ", $nums[0];

   $framework_python = array('Django', 'Flask');

   ?> 

   <pre>
   <?php 
        print_r($framework_python);
   ?> 
   </pre>

   <pre>
     <?php 
          var_dump($framework_python);
     ?> 
   </pre>


   <?php 
        //Agrega elementos a los areglos
        $framework_python[] = "Bottle";
        $framework_python[3] = "Pyramid";
   ?> 
   <pre>
     <?php 
          print_r($framework_python);
     ?> 
   </pre>

   <?php 
        //Eliminar el ultmo elemento y lo almacenaremos en una variable
        $pyramid = array_pop($framework_python);
        echo "Elemento eliminado: ", $pyramid;
   ?> 
   <pre>
     <?php 
          print_r($framework_python);
     ?> 
   </pre>
    <br>
   <?php 
        //Eliminar un elemento y lo almacenaremos en una variable
        unset($framework_python[0]);
       
   ?> 
   <pre>
     <?php 
          print_r($framework_python);
     ?> 
   </pre>


   <?php 
        //Eliminar el primer elemento y lo almacenaremos en una variable
        $fisrt_element = array_shift($framework_python);
        echo "Elemento eliminado: ", $fisrt_element;
   ?> 
   <pre>
     <?php 
          print_r($framework_python);
     ?> 
   </pre>
    <br>


    <?php 
        //remplazar elementos por otros y los almacenaremos en una variable
        $elemt_nums = array_splice($nums, 0, 2, array(9, 8, 7));
   ?> 

     <pre>
          Eliminados
          <?php 
               print_r($elemt_nums);
          ?> 
     </pre>
    <br>

   <pre>
     <?php 
          print_r($nums);
     ?> 
   </pre>
    <br>




</body>
</html>