<link rel="stylesheet" href="../bootstrap.css">
<?php


$connection = mysqli_connect('localhost', 'root', '', 'prueba');
$datos_beneficiarios = array();
if(isset($_POST['btn-iniciar'])){
    //$programa = $_POST['programa'];
    //$documento = $_POST['documento'];
    $programa = mysqli_real_escape_string($connection, $_POST['programa']);
    $documento =  mysqli_real_escape_string($connection, $_POST['documento']);
    //addslashes()

    $sql = "SELECT * FROM beneficiarios WHERE PROGRAMA_ACADEMICO = '". $programa ."' AND DOCUMENTO = '". $documento ."' ";
    $table_respusta = mysqli_query($connection, $sql);
    //$datos_beneficiarios = mysqli_fetch_row($table_respusta);
    //INYECCION -> 107747904' or 1='1

    if ($user = mysqli_fetch_row($table_respusta)){
        echo " <div class='jumbotron bg-success'> Has iniciado sesion </div>  ";
        echo $sql;
    }
    else{
        echo " <div class='jumbotron bg-danger'> No te encuentras registado</div>";
        echo $sql;
    }
    //echo "hol";


    mysqli_close($connection);
}


?>
