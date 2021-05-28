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
 if (mysqli_connect_errno()){
     echo "Error al conectarse con el servidor";
     exit();
 }

 /*===================Otra forma de conectarse a la base de datos
 $connection = mysqli_connect($db_host, $user_db, $password_db); //Omitimos el nombre de la base de datos
 mysqli_select_db($connection, $nombre_db); // el nombre omitido en la linea anterior se le pasa a esta funcion junto con la conexion
 *====================*/

 
 //Consulta SQL
 $sql = "INSERT INTO usuario(id, nombre, apellido, edad) VALUES(4, 'jhon', 'mosquera', 30)";

 $result = mysqli_query($connection, $sql);

 mysqli_close($connection);
 ?>




 <pre>
    <?php
        //print_r($datos);
    ?>
</pre>
</body>
</html>


