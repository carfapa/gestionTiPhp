<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap.css">
</head>
<body>

<div class="container">
    <form method="post">
        <div class="form-group">
            <h3>Buscar beneficiarios por programa acdemico.</h3>
        </div>
        <div class="form-group">
            <label for="programa">Programa Academico</label>
            <input type="search" name="programa" id="programa" class="form-control">
        </div>

        <div class="form-group">
            <input type="submit" name="btn-buscar" value="Buscar" class="btn btn-outline-primary">
        </div>
    </form>
    <hr>

    <?php


    $connection = mysqli_connect('localhost', 'root', '', 'prueba');
    $datos_beneficiarios = array();
    mysqli_set_charset($connection, 'utf8');
    if(isset($_POST['btn-buscar'])){
        //$programa = $_POST['programa'];
        $parameter = $_POST['programa'];
        $sql = "SELECT * FROM beneficiarios WHERE PROGRAMA_ACADEMICO like '%".$parameter ."%'";
        $table_respusta = mysqli_query($connection, $sql);
        //$datos_beneficiarios = mysqli_fetch_assoc($table_respusta);
        //$datos_beneficiarios = mysqli_fetch_array($table_respusta, MYSQLI_ASSOC);
        mysqli_close($connection);
    }


    ?>
    <pre>
        <?php //print_r($datos_beneficiarios) ?>
    </pre>

    <div>
        <table CLASS="table">
             <tr>
                 <th>ID</th>
                 <th>PERIODO</th>
                 <th>PROGRAMA ACADEMICO</th>
                 <th>DOCUMENTO</th>
                 <th>NOMBRE COMPLETO</th>
             </tr>

            <?php ?>
            <?php
            if(!$table_respusta){
                echo "Error";
            }
            else{
                while ($datos_beneficiarios = mysqli_fetch_array($table_respusta, MYSQLI_ASSOC)){ ?>
                    <tr>
                        <td> <?php echo $datos_beneficiarios["NOR"]?> </td>
                        <td> <?php echo $datos_beneficiarios["PERIODO_ACADEMICO"]?> </td>
                        <td> <?php echo $datos_beneficiarios["PROGRAMA_ACADEMICO"]?> </td>
                        <td> <?php echo $datos_beneficiarios["DOCUMENTO"]?> </td>
                        <td> <?php echo $datos_beneficiarios["NOMBRE_COMPLETO"]?> </td>
                    </tr>
                 <?php } //FIN DEL WHILE
            } //FIN DEL ELSE
            ?>

            <!--Otra forma de acerlos-->
            <?php /* while ($datos_beneficiarios = mysqli_fetch_assoc($table_respusta)): ?>
                <tr>
                    <td> <?php echo $datos_beneficiarios["NOR"]?> </td>
                    <td> <?php echo $datos_beneficiarios["PERIODO_ACADEMICO"]?> </td>
                    <td> <?php echo $datos_beneficiarios["PROGRAMA_ACADEMICO"]?> </td>
                    <td> <?php echo $datos_beneficiarios["DOCUMENTO"]?> </td>
                    <td> <?php echo $datos_beneficiarios["NOMBRE_COMPLETO"]?> </td>
                </tr>
            <?php endwhile; */?>

            <!--Otra forma de acerlos-->
            <?php /* while ($datos_beneficiarios = mysqli_fetch_assoc($table_respusta, MYSQLI_NUM )): ?>
                <tr>
                    <td> <?php echo $datos_beneficiarios[0]?> </td>
                    <td> <?php echo $datos_beneficiarios[1]?> </td>
                    <td> <?php echo $datos_beneficiarios[2]?> </td>
                    <td> <?php echo $datos_beneficiarios[3]?> </td>
                    <td> <?php echo $datos_beneficiarios[4]?> </td>
                </tr>
            <?php endwhile; */?>




        </table>
    </div>
</div>


</body>
</html>


<?php
/*
//Primero tienes que validar que llegue un dato, lo hice con una condici??n ternaria
$div = !empty( $_POST['div'] ) ? $_POST['div'] : null;

//Creas tu consulta
$sql = "SELECT id_div FROM DIVISIONES WHERE division_name = '" . $div . "'";

//Ejecutas la consulta, voy a suponer que tu variable $conexion no tiene problemas
$res = mysqli_query( $conexion, $sql );

//Valida que no haya problemas con la consulta, mysqli_query te regresa un vector de datos o false
if( !$res ){
    echo 'La consulta est?? mal construida';
}

else{
    //Si la consulta est?? bien ahora revisa que existan datos
    if( mysqli_num_rows($res) <= 0){
        echo 'No existe informaci??n con esta variable';
    }

    else{
        //Si trae datos la consulta entonces ya puedes usarla, hay que sacar los datos
        //Como solo es un dato podemos hacerlo directo, si fueran m??s, entonces hacemos un while
        $row = mysqli_fetch_array( $res );

        //Saca la variable, as?? como la llamaste en tu SQL vendr?? el ??ndice en tu resultado
        //Supondr?? que es un INT o similar, por lo que parsear??, si no es as?? solo quita (int)
        $in_div = (int) $row['id_div'];

        //Recuerda que por salud del servidor hay que liberar memoria
        mysqli_free_result($res);

        //Ahora si ya puedes usar el id en tu Insert;
        $insert = "insert into result_equipo (id_reseq, id_div, jor, id_eq, puntos, pg, pp, n_p, fecha) VALUES
    (NULL, '$in_div', '$_POST[jor]', '$_POST[equipos]', '2', '1', '0', '0', '$_POST[date]')";

        //Ejecuta tu INSERT
        mysqli_query($conexion, $insert);

        //Vamos validar la inserci??n
        if( mysqli_affected_rows($conexion)<=0 ){
            echo 'No se insert?? nada';
        }

        else{
            //En caso que necesites el ID que se insert?? lo puedes hacer as??
            $last_id = mysqli_insert_id($conexion);
            echo 'Inserci??n correcta, el ID es: ' . $last_id;
        }

        //Recuerda cerrar la conexi??n
        mysqli_close( $conexion );
    }
}
*/
?>

















<!--no puedes meter un array asi no mas directamente en tu sentencia SQL la forma correcta seria entre llaves {}
o concatenado con . asi

$sql = "SELECT id_div FROM divisiones WHERE division_name = '{$_POST[div]}'";


mysqli_query($conexion, "insert into result_equipo (id_reseq, id_div, jor, id_eq, puntos, pg, pp, n_p, fecha) VALUES
(NULL, '$res', '{$_POST[jor]}', '{$_POST[equipos]}', '2', '1', '0', '0', '{$_POST[date]}')"); -->


<!--
$sql = "SELECT id_div FROM divisiones WHERE division_name = '{$_POST[div]}'";


      mysqli_query($conexion, "insert into result_equipo (id_reseq, id_div, jor, id_eq, puntos, pg, pp, n_p, fecha) VALUES
        (NULL, '$res', '".$_POST[jor]."', '".$_POST[equipos]."', '2', '1', '0', '0', '".$_POST[date]."')");
-->



