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
    <form action="insert.php" method="post" class="jumbotron w-50 m-auto">
        <p class="p font-weight-bold">Formulario de Registro</p>
        <div class="form-group">
            <label for="id" class="">ID</label>
            <input type="number" name="id" id="id" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad" class="form-control" required>
        </div>

        <div class="form-group w-100">
            <input type="submit" name="btn-insert" value="Registrar" class="btn btn-outline-primary w-50 m-auto">
        </div>


    </form>
    <hr>




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

            <?php //foreach ($datos_beneficiarios as $beneficiario): ?>
                <tr>
                    <td> <?php// echo $beneficiario[0]?> </td>
                    <td> <?php // echo $beneficiario[1]?> </td>
                    <td> <?php // echo $beneficiario[2]?> </td>
                    <td> <?php //echo $beneficiario[3]?> </td>
                    <td> <?php //echo $beneficiario[4]?> </td>
                </tr>
            <?php// endforeach; ?>


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

















<!--no puedes meter un array asi no mas directamente en tu sentencia SQL la forma correcta seria entre llaves {} o concatenado con . asi

$sql = "SELECT id_div FROM divisiones WHERE division_name = '{$_POST[div]}'";


mysqli_query($conexion, "insert into result_equipo (id_reseq, id_div, jor, id_eq, puntos, pg, pp, n_p, fecha) VALUES
(NULL, '$res', '{$_POST[jor]}', '{$_POST[equipos]}', '2', '1', '0', '0', '{$_POST[date]}')"); -->


<!--
$sql = "SELECT id_div FROM divisiones WHERE division_name = '{$_POST[div]}'";


      mysqli_query($conexion, "insert into result_equipo (id_reseq, id_div, jor, id_eq, puntos, pg, pp, n_p, fecha) VALUES
        (NULL, '$res', '".$_POST[jor]."', '".$_POST[equipos]."', '2', '1', '0', '0', '".$_POST[date]."')");
-->



