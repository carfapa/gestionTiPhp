<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarlosFabianPalacios - Tarea 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

   <h2 class="header-title"> Carlos Fabian Palacios - Gestion Ti - Tarea 1</h2> <br>

    <div class="container flex flex-md">
        <form method="get" class="flex-item">
            <h2>Formulario de compra</h2>
            <div class="group-input">
                <label for="name">Nombre: </label>
                <input type="text" name="name"  required>
            </div> <!-- end group-name -->
            <div class="group-input" >
                <label for="addres">dirección: </label>
                <input type="text" name="addres" id="addres" required>
            </div>  <!-- end group-addres -->
            <div class="group-input">
                <label for="phone">Teléfono: </label>
                <input type="tel" name="phone" id="phone" required>
            </div>  <!-- end group-phone -->
            <div class="group-input">
                <label for="neighborhood">Barrio: </label>
                <input type="text" name="neighborhood" id="neighborhood" required>
            </div>  <!-- end group-neighborhood -->
            <div class="group-input">
                <label for="propety_area">Área del immueble(metros cuadrados): </label>
                <input type="number" name="propety_area" id="propey_area" required>
            </div> <!-- end group-propety_area -->
            <div class="group-input">
                <label for="socioeconomic">Estrato: </label>
                <input type="number" list="list-socioeconomic" name="socioeconomic" id="socioeconomic" min="1" max="5"  required/>
                <datalist id="list-socioeconomic">
                    <option value="1"> Estracto 1</option>
                    <option value="2"> Estracto 2</option>
                    <option value="3"> Estracto 3</option>
                    <option value="4"> Estracto 4</option>
                    <option value="5"> Estracto 5</option>
                </datalist>
            </div> <!-- end group-propety_area -->

            <div class="group-input">
                <input type="submit" value="ENVIAR" name="btn_enviado" id="btn_enviado">
            </div> <!-- endbutton -->
            
        </form> <!-- endform -->

        <div class="scritp-php flex-item">
            <h3>Datos de la compra</h3> <hr>
            <ul>
                <?php

                    if(isset($_GET['btn_enviado']))
                    {
                        $tarifa_catastral = 0;

                        if($_GET['socioeconomic'] == 1){
                            $tarifa_catastral = 200;
                        }
                        elseif($_GET['socioeconomic'] == 2){
                            $tarifa_catastral = 220;
                        }
                        elseif($_GET['socioeconomic'] == 3){
                            $tarifa_catastral = 240;
                        }
                        elseif($_GET['socioeconomic'] == 4){
                            $tarifa_catastral = 300;
                        }
                        elseif($_GET['socioeconomic'] == 5){
                            $tarifa_catastral = 400;
                        }
                        $valor_catastral = $tarifa_catastral * $_GET['propety_area'];
                        echo "<li> <strong> Nombre: </strong>  ". $_GET['name'] ."</li>";
                        echo "<li> <strong> Dirección: </strong>  ". $_GET['addres'] ."</li>";
                        echo "<li> <strong> Teléfono: </strong>  ". $_GET['phone'] ."</li>";
                        echo "<li> <strong> Barrio: </strong>  ". $_GET['neighborhood'] ."</li>";
                        echo "<li> <strong> Estrato: </strong>  ". $_GET['socioeconomic'] ."</li>";
                        echo "<li> <strong> Área del inmueble: </strong>  ". $_GET['propety_area'] ." M<sup>2</sup> </li>";
                        echo "<li> <strong> Valor catastral: $</strong>  ". $valor_catastral ."</li>";
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