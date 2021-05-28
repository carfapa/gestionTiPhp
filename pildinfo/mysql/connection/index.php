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

 $db_host = "localhost";
 $nombre_db = "prueba";
 $user_db = "root";
 $password_db= "";


// mysqli_connect, nos conecta con nuestra base de datos mysql
 $connection = mysqli_connect($db_host, $user_db, $password_db, $nombre_db);

 //mysqli_set_charset, es para la codificacion del idioma
 mysqli_set_charset($connection, 'utf8');

 //Consulta SQL
 $sql = "SELECT * FROM usuario";

 // mysqli_query, ejecuta nuestra consulta
 $table_rest = mysqli_query($connection, $sql);

 // mysqli_fetch_row, nos trae la primera file o registro encotrado en nuestra bases de datos
 //$datos = mysqli_fetch_row($table_rest);



 //Cerral la conexion a la base de datos;
 mysqli_close($connection);

 ?>


<pre>
    <?php
    // mysqli_fetch_all, nos trae todos los registro que comupla con los requisitos de la consultas
       $all_datos = mysqli_fetch_all($table_rest);

    // mysqli_fetch_all, nos trae todos los registro que comupla con los requisitos de la consultas
       $array_datos = mysqli_fetch_array($table_rest);

       echo  'mysqli_fetch_all($table_rest)'. "<br>";
       print_r($all_datos);

       echo 'mysqli_fetch_array'. "<br>";
       print_r($all_datos);
    ?>
</pre>

 <pre>
    <?php
        //print_r($datos);
    ?>
</pre>
</body>
</html>


