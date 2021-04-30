<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css' integrity='sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l' crossorigin='anonymous'>
</head>
<body>
    <?php
    
    $nota1 = 5;
    $nota2 = 5;
    $nota3 = 5;
    $promedio = ($nota1 + $nota2 + $nota3) / 3;
    echo 'PROMEDIO: ', $promedio;

    $nombre = 'cralos fabian';
    $apellido = 'palacios palacios';
    $edad = 19;
    $sexo = 'hombre';

    echo "<br><br>";
    echo "
    <div class='container'>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>Nombre</th>
                    <th scope='col'>Apellido</th>
                    <th scope='col'>Edad</th>
                    <th scope='col'>Sexo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope='row'> {$nombre} </td>
                    <td> {$apellido} </td>
                    <td>{$edad}</td>
                    <td> {$sexo} </td>
                </tr>
                <tr>
                    <td scope='row'> {$nombre} </td>
                    <td> {$apellido} </td>
                    <td>{$edad}</td>
                    <td> {$sexo} </td>
                </tr>
                <tr>
                    <td scope='row'> {$nombre} </td>
                    <td> {$apellido} </td>
                    <td>{$edad}</td>
                    <td> {$sexo} </td>
                </tr>
            </tbody>
        </table>      
    </div>
    ";

    $edad++;

    $edad += 2;
    $edad += 30;
    ?>

<?php echo "<br><br>"; ?>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Sexo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="col"> <?php echo $nombre?></td>
                    <td scope="col"> <?php echo $apellido?></td>
                    <td scope="col"> <?php echo $edad ?></td>
                    <td scope="col"> <?php echo $sexo?></td>
                </tr>
                <tr>
                    <td scope="col"> <?php echo $nombre?></td>
                    <td scope="col"> <?php echo $apellido?></td>
                    <td scope="col"> <?php echo $edad ?></td>
                    <td scope="col"> <?php echo $sexo?></td>
                </tr>
            </tbody>
        </table>
    </div>
    
</body>
</html>