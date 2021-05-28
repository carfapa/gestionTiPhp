<DOCTYPE html>
<html lang="es">
<head>
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container flex flex-md">
    <form method="post" class="flex-item">
        <h2>Formulario de compra</h2>
        <div class="group-input">
            <label for="name">Nombre: </label>
            <input type="text" name="name" id="name" required>
        </div> <!-- end group-name -->
        <div class="group-input" >
            <label for="addres">Edad: </label>
            <input type="number" name="age" id="age" required>
        </div>  <!-- end group-addres -->
        <div class="group-input">
            <input type="submit" value="ENVIAR" name="btn_enviado" id="btn_enviado">
        </div> <!-- endbutton -->

    </form> <!-- endform -->

    <div style="text-align: center; padding:30px; color: red">
        <?php

        //DECLARACION DE UNA COSTANTES
        define("MY_COSTANTE", "soy costante", true);
        //echo MY_COSTANTE;
        if(isset($_POST['btn_enviado']))
        {

            $name = $_POST['name'];
            $age = $_POST['age'];
            if($name == "carlos")
            {
                echo "Ok, $name, gracias por visitarnos";
            }
            else{
                echo  "OK, $name, estas en el lugar equivocado. Chao";
            }
        }

        ?>

    </div>

</div>


</body>
</html>
