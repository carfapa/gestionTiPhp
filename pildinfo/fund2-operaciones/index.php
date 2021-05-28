<DOCTYPE html>
    <html lang="es">
    <head>
        <title></title>
        <link rel="stylesheet" href="style.css">
        <style>
            .resultado{
                font-size: 30px;
                text-align: center;
                padding: 100px 0;
            }
        </style>
    </head>
    <body>

    <?php

      $operaciones = array('suma', 'resta', 'division', 'multiplicacion');
    ?>
    
    <div class="container flex flex-md">
        <form method="get" class="flex-item">
            <h2>Formulario de compra</h2>
            <div class="group-input">
                <label for="name">Número 1: </label>
                <input type="number" name="num1" id="num1" required>
            </div> <!-- end group-name -->
            <div class="group-input" >
                <label for="addres">Número 2: </label>
                <input type="number" name="num2" id="num2" required>
            </div>  <!-- end group-addres -->

            <select name="operacion" id="operacion">
                <?php foreach($operaciones as $operacion){
                    echo "<option value=\"$operacion\">$operacion</option>";
                } ?>
            </select>
            
            <div class="group-input">
                <input type="submit" value="Realizar" name="btn_accion" id="btn_accion">
            </div> <!-- endbutton -->

        </form> <!-- endform -->

        <div class="flex-item">
            <?php
            if (isset($_GET['btn_accion']))
            {
                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];
                $operacion_actual = $_GET['operacion'];
                $resultado = 0;
                if ($operacion_actual == "suma"){
                    $resultado = $num1 + $num2;
                }
                elseif ($operacion_actual == "resta"){
                    $resultado = $num1 - $num2;
                }
                elseif ($operacion_actual == "division"){
                    try {
                        $resultado = $num1 / $num2;
                    }catch (DivisionByZeroError $e){
                        echo "<div class='resultado'><strong>no se pude dividir entre 0</strong></div>";
                    }


                }
                elseif ($operacion_actual == "multiplicacion"){
                    $resultado = $num1 * $num2;
                }

                echo "<div class='resultado'> <strong>$operacion_actual = </strong> $resultado </div>";

            }
            ?>
        </div>
    </div>


    </body>
    </html>

