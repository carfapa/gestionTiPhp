

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carlos Fabian Palacios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

   <h2> Carlos Fabian Palacios - Gestion Ti - Tarea 1</h2> <br>

    <div class="container flex">
        <form method="get" class="flex-item">
            <div class="groud-input">
                <label for="name">Nombre: </label>
                <input type="text" name="name" id="name" required>
            </div> <!-- end groud-name -->
            <div class="groud-input" >
                <label for="addres">Dirección: </label>
                <input type="text" name="addres" id="addres" required>
            </div>  <!-- end groud-addres -->
            <div class="groud-input">
                <label for="phone">Teléfono: </label>
                <input type="tel" name="phone" id="phone" required>
            </div>  <!-- end groud-phone -->
            <div class="groud-input">
                <label for="neighborhood">Barrio: </label>
                <input type="text" name="neighborhood" id="neighborhood" required>
            </div>  <!-- end groud-neighborhood -->
            <div class="groud-input">
                <label for="propety_area">Área del immueble(metros cuadrados): </label>
                <input type="number" name="propety_area" id="propey_area" required>
            </div> <!-- end groud-propety_area -->
            <div class="groud-input">
                <label for="estrato">Estrato: </label>
                <input type="number" name="estrato" id="estrato" min="1" max="5" required>
            </div> <!-- end groud-propety_area -->
            <div class="groud-input">
                <input type="submit" value="ENVIAR" name="btn_enviado" id="btn_enviado">
            </div> <!-- endbutton -->
            
        </form> <!-- endform -->

        <div class="scrit-php flex-item">
            <h3>Datos de la compra</h3> <hr>
            <ul>
                <?php
                    $len = count($_GET);
                    if(isset($_GET['btn_enviado'])){
                        echo "<li> <b>Nombre: </b> ". $_GET['name'] ."</li>";
                        echo "<li> <b>Dirección: </b> ". $_GET['addres'] ."</li>";
                        echo "<li> <b>Teléfono: </b> ". $_GET['phone'] ."</li>";
                        echo "<li> <b>Barrio: </b> ". $_GET['neighborhood'] ."</li>";
                        echo "<li> <b>Estrato: </b> ". $_GET['estrato'] ."</li>";
                        echo "<li> <b>Área del inmueble: </b> ". $_GET['propety_area'] ." M<sup>2</sup> </li>";

                        $taria_catastral = 0;
                        if($_GET['estrato'] == 1){
                            $taria_catastral = 200;
                        }
                        elseif($_GET['estrato'] == 2){
                            $taria_catastral = 220;
                        }
                        elseif($_GET['estrato'] == 3){
                            $taria_catastral = 240;
                        }
                        elseif($_GET['estrato'] == 4){
                            $taria_catastral = 300;
                        }
                        elseif($_GET['estrato'] == 5){
                            $taria_catastral = 400;
                        }
                        $valor_catastral = $taria_catastral * $_GET['propety_area'];
                        echo "<li> <b>Área del inmueble: $</b> ". $valor_catastral ."</li>";
                    }
                    else{
                        echo "por favor llene todos los campos";
                    }
                ?> 
            </ul>
            
        </div>
    </div>
</body>
</html>