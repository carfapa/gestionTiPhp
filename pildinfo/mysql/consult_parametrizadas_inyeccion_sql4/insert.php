<?php


$connection = mysqli_connect('localhost', 'root', '', 'prueba');
$datos_beneficiarios = array();
mysqli_set_charset($connection, 'utf8');


if(isset($_POST['btn-insert'])){

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];

    $sql = "INSERT INTO usuario(id, nombre, apellido, edad) VALUES(?, ?, ?, ?)";

    $obj_result = mysqli_prepare($connection, $sql);
    //type = typo de datos;                            //issi; i:int(id), s:str(nombre), s:str(apellido), i:int(edad)
    $ok_paramter = mysqli_stmt_bind_param($obj_result, "issi", $id, $nombre, $apellido, $edad); //Bool si es exitoso
    $sql_execute = mysqli_stmt_execute($obj_result);

    if(!$sql_execute){
        echo "Error al ejecutar la consulta";
    }
    else{
        //$ok_result = mysqli_stmt_bind_result($obj_result, $id, $periodo, $programa, $documento, $nombre);
        echo "Agregado <br>";

      /*  while (mysqli_stmt_fetch($obj_result)){
            echo $id ."-". $periodo ."-". $programa ."-". $documento ."-". $nombre ."<br>";
      }*/
        mysqli_stmt_close($obj_result);
    }
    mysqli_close($connection);

}
