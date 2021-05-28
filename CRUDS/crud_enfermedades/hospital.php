<link rel="stylesheet" href="css/bootstrap.css">
<?php
    $connection = mysqli_connect('localhost', 'root', '', 'prueba');
    $msg = array('mss_result_consult'=>'');


    if(isset($_POST['registrar'])){

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $tipo_identificicacion = $_POST['tipo-documento'];
        $num_identificacion = $_POST['n-identificacion'];
        $enfermedad = $_POST['enfermedad'];
        $categofia_enfermedad = $_POST['categoria-enfermedad'];
        $fecha_diagnostico = $_POST['fecha-diagnostico'];
        $nombre_tratamiento = $_POST['tratamiento'];
        if(isset($_POST['tiene-tratamineto'])){
            $tratamiento = "si";
        }else{
            $tratamiento = "no";
            //$nombre_tratamiento = "";
        }
        $telefono = $_POST['telefono'];
        $paciente = array('nom'=>$nombre, 'ape'=> $apellido, 'type_d'=> $tipo_identificicacion,
            'document'=> $num_identificacion, 'enfer'=> $enfermedad, 'cat_enfer'=>$categofia_enfermedad,
            'fecha_d'=>$fecha_diagnostico, 'trata'=>$tratamiento, 'nom_trat'=> $nombre_tratamiento, 'tele'=> $telefono);
        insert_pacinete($connection, $paciente);
    }

    function insert_pacinete($connection, $param){
        $sql = "INSERT INTO pacientes(nombre, apellido, tipo_documento, num_documento, nom_enfermadad, 
                      categoria_enfermedad, fecha_diagnosticacion, estado_tratamineto, nombre_tratamineto, telefono)
                      VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $sql_prepare = mysqli_prepare($connection, $sql);
        $param_prepare = mysqli_stmt_bind_param($sql_prepare, 'sssissssss', $param['nom'], $param['ape'],
          $param['type_d'], $param['document'], $param['enfer'], $param['cat_enfer'], $param['fecha_d'], $param['trata'],
          $param['nom_trat'], $param['tele']);
        $excute_consult = mysqli_stmt_execute($sql_prepare);
        mysqli_stmt_close($sql_prepare);
        global $msg;
        if ($excute_consult){
            $msg['mss_result_consult'] = 1;
        }
        else{
            $msg['mss_result_consult'] = 0;
        }

    }

    function get_msg()
    {
        global $msg;
        return $msg;
    }

/*

CREATE TABLE pacientes
(
id_paciente INT PRIMARY KEY,
nombre VARCHAR(50) NOT NULL,
apellido VARCHAR(50) NOT NULL,
tipo_documento VARCHAR(40) NOT NULL,
num_documento INT NOT NULL UNIQUE,
nom_enfermadad VARCHAR(70) NOT NULL,
categoria_enfermedad VARCHAR(10) NOT NULL,
fecha_diagnosticacion DATE NOT NULL,
estado_tratamineto VARCHAR(2) NOT NULL,
nombre_tratamineto VARCHAR(60) NULL,
telefono VARCHAR(16) NOT NULL
);

*/

?>

<div class="container">
    <div class="jumbotron bg-dark" >
        <div class="alert">
            <?php if ($msg['mss_result_consult'] == 1): ?>
                <div class="alert alert-success"> Agregado exitosamente </div>
            <?php else: ?>
                <div class="alert alert-danger"> Operacion no exitosa </div>
            <?php endif;?>
        </div>

        <div class="container text-center">
            <a href="index.php" role="button"  class="btn btn-outline-primary">Ir a inicio</a>
        </div>
    </div>
</div>

