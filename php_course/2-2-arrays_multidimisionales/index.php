
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    
    $persona = array(
        'datos' => array(
            'name' => 'carlos',
            'surname' => 'palacios',
            'edad' => 19,
            'sexo' => 'hombre'
        ),

        'lenguajes' => array(
            'frontend' => array('html', 'css', 'js', 'bootstrap', 'jquery'),
            'backend' => array('python(flask), php')
        )
    );

    ?>

    <pre>
        <?php 
        print_r($persona);
        ?>
    </pre>

    <br><br><br>
    <hr>

    <pre>
        <?php 
        var_dump($persona);
        ?>
    </pre>

    <br><br><br>
    <hr>

    <pre>
        <?php 
        print_r($persona['datos']);
        ?>
    </pre>

    <h5>Verificando si un elemento en array existe</h5>
    <?php 
        $resul = in_array('carlos', $persona['datos']);
        $resul2 = in_array('paacios', array_values($persona['datos']))
    ?>
    <pre>
        <?php 
            var_dump($resul);
            print_r($resul);

            echo "<br><hr>";

            var_dump($resul2);
            print_r($resul2);
        ?>
    </pre>

</body>
</html>