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

if(isset($_POST['btn_eliminar'])){

    $id = $_POST['id'];

    //Consulta SQL
    $sql = "DELETE FROM usuario WHERE id='". $id ."'";

    $result = mysqli_query($connection, $sql);
    if ($result){
        // mysqli_affected_rows(param), Retorna el numero de registros afectados por la consulta
        $cant_regist_eliminado = mysqli_affected_rows($connection);
        if($cant_regist_eliminado >= 1){
            echo "Eliminado";
        }else{
            echo "El usuario que quiere eliminar no existe";
        }

    }
    else{
        echo "Ocurrio un error";
    }

}

mysqli_close($connection);

