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
    <form method="post" action="panel.php" class="jumbotron w-50 my-5 mx-auto">
        <div class="form-group">
            <h3>Iniciar sesión</h3>
        </div>

        <div class="form-group">
            <label for="programa">Programa Academico</label>
            <input type="search" name="programa" id="programa" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="documento">Númedo de documento</label>
            <input type="search" name="documento" id="documento" class="form-control" required>
        </div>


        <div class="form-group">
            <input type="submit" name="btn-iniciar" value="Iniciar sesión" class="btn btn-outline-primary">
        </div>
    </form>
    <hr>


    <pre>
        <?php //print_r($datos_beneficiarios) ?>
    </pre>

    <div>

    </div>
</div>


</body>
</html>


<?php
/*
//Primero tienes que validar que llegue un dato, lo hice con una condición ternaria
$div = !empty( $_POST['div'] ) ? $_POST['div'] : null;

//Creas tu consulta
$sql = "SELECT id_div FROM DIVISIONES WHERE division_name = '" . $div . "'";

//Ejecutas la consulta, voy a suponer que tu variable $conexion no tiene problemas
$res = mysqli_query( $conexion, $sql );

//Valida que no haya problemas con la consulta, mysqli_query te regresa un vector de datos o false
if( !$res ){
    echo 'La consulta está mal construida';
}

else{
    //Si la consulta está bien ahora revisa que existan datos
    if( mysqli_num_rows($res) <= 0){
        echo 'No existe información con esta variable';
    }

    else{
        //Si trae datos la consulta entonces ya puedes usarla, hay que sacar los datos
        //Como solo es un dato podemos hacerlo directo, si fueran más, entonces hacemos un while
        $row = mysqli_fetch_array( $res );

        //Saca la variable, así como la llamaste en tu SQL vendrá el índice en tu resultado
        //Supondré que es un INT o similar, por lo que parsearé, si no es así solo quita (int)
        $in_div = (int) $row['id_div'];

        //Recuerda que por salud del servidor hay que liberar memoria
        mysqli_free_result($res);

        //Ahora si ya puedes usar el id en tu Insert;
        $insert = "insert into result_equipo (id_reseq, id_div, jor, id_eq, puntos, pg, pp, n_p, fecha) VALUES
    (NULL, '$in_div', '$_POST[jor]', '$_POST[equipos]', '2', '1', '0', '0', '$_POST[date]')";

        //Ejecuta tu INSERT
        mysqli_query($conexion, $insert);

        //Vamos validar la inserción
        if( mysqli_affected_rows($conexion)<=0 ){
            echo 'No se insertó nada';
        }

        else{
            //En caso que necesites el ID que se insertó lo puedes hacer así
            $last_id = mysqli_insert_id($conexion);
            echo 'Inserción correcta, el ID es: ' . $last_id;
        }

        //Recuerda cerrar la conexión
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



