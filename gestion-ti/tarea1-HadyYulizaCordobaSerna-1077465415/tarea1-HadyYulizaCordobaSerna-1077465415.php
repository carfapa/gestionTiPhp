
<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['tel'];
$direccion = $_POST['direc'];
$barrio = $_POST['bar'];
$area = $_POST['area'];
$estracto = $_POST['estracto'];

if($estracto == 1){
    $valorcatastral = $area * 200.00;
    //echo $valorcatastral;
}elseif($estracto == 2){
    $valorcatastral = $area * 220.00;
    //echo $valorcatastral;
}elseif($estracto == 3){
    $valorcatastral = $area * 240.00;
    //echo $valorcatastral;
}elseif($estracto == 4){
    $valorcatastral = $area * 300.00;
    //echo $valorcatastral;
}elseif($estracto == 5){
    $valorcatastral = $area * 400.00;
    //echo $valorcatastral;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos suministrados</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Estos son los datos que suministraste</h1>
    <p>Nombre: <?php echo $nombre;?></p>
    <p>Direcciòn: <?php echo $direccion;?></p>
    <p>Telefono: <?php echo $telefono;?></p>
    <p>Barrio: <?php echo $barrio;?></p>
    <p>Area del inmueble: <?php echo $area .' metros cuadrados';?></p>
    <p>Estracto: <?php echo $estracto;?></p>
    <p>Valor catastral a pagar: <?php /*echo $valorcatastral .' COP';*/?></p>
</body>
</html>