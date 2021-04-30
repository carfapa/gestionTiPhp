
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
            'backend' => array('python(flask)', 'php')
        )
    );

    $datos = array(
        'name' => 'carlos',
        'surname' => 'palacios',
        'edad' => 19,
        'sexo' => 'hombre'
    );

    $lenguajes = array(
        'frontend' => array('html', 'css', 'js', 'bootstrap', 'jquery'),
        'backend' => array('python(flask)', 'php')
    ); 

    $frontend = array('html', 'css', 'js', 'bootstrap', 'jquery');
    $backend = array('python(flask)', 'php');

    ?>
    
    <h3>Bucle foreach - forma 1</h3>
    <ul>
        <?php foreach($frontend as $tecnologia): ?>
            <li> <?php echo $tecnologia ?> </li>
        <?php endforeach; ?>
    </ul>

    <h3>Bucle foreach - forma 2</h3>
    <ul>
        <?php 
        foreach($frontend as $tecnologia)
        {
            echo "<li>{$tecnologia}</li>";
        }
        ?>      
    </ul>

    <h3>Bucle foreach - recoriendo array clave:valor</h3>
    <ul>
        <?php foreach($datos as $key => $value): ?>
            <li> <?php echo "<b>{$key}</b>" .": ". $value; ?> </li>
        <?php endforeach ?>
    </ul>

    <h3>Bucle foreach - recoriendo array multidomensional</h3>
    <ul>
        <?php foreach($persona as $key =>  $value){ ?>
            <?php echo $key; ?>
            <ul>
                <?php foreach($value as $subkey => $subvalue){ ?>
                    <li> <?php echo $subkey ." : ". $subvalue; ?>  </li>
                <?php } ?>
            </ul>
            
        <?php } ?>
    </ul>
    <h3>Bucle foreach - recoriendo array multidomensional</h3>
    <ul>
        <?php foreach($persona['lenguajes'] as $key =>  $value){ ?>
            <?php echo "Lenguajes del ". $key; ?>
            <ul>
                <?php foreach($value as $subkey => $subvalue){ ?>
                    <li> <?php echo $subkey ." : ". $subvalue; ?>  </li>
                <?php } ?>
            </ul>
            
        <?php } ?>
    </ul>
    <br><br><hr>


    <pre>
        <?php print_r($persona) ?>
    </pre>

    <!-- algunos metodos  -->
    <!-- array_key_exists('key_buscar', array) -- esto se evalua con un IF-->


</body>
</html>