<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
     <link rel="stylesheet" href="../bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container my-4">
    <div class="conatiner">
        <form action="" method="post" id="contacto" name="contacto" novalidate onsubmit=" return true">

            <div class="row">
                <div class="form-group col-md-6 mb-3" id="group-names">
                    <label for="names">Nombres</label>
                    <input type="text" name="names" id="names" class="form-control" pattern="^[a-zA-ZÁ-ÿ\s]{3,30}$" required>
                    <div class="mensaje_error">
                        hola, nombre
                    </div>
                </div>
                <div class="form-group col-md-6 mb-3 " id="group-lastname">
                    <label for="lastnames" class="">Apellidos</label>
                    <input type="text" name="lastnames" id="lastnames" class="form-control" pattern="^[a-zA-ZÁ-ÿ\s]{3,30}$"  required>
                    <div class="mensaje_error">
                        hola, apellido
                    </div>
                </div>
            </div>

            <div class="form-group" id="group-email">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" pattern="^[a-zA-Z]Á-ÿ0-9_-.+]+\@[a-zA-Z]Á-ÿ]+\.[a-zA-Z]Á-ÿ]$" required>
                <div class="mensaje_error">
                    hola, email
                </div>
            </div>

            <div class="form-group" id="group-phone">
                <label for="phone">Teléfono</label>
                <input type="tel" name="phone" id="phone" class="form-control" pattern="^\+?+\d{7,14}" required>
                <div class="mensaje_error">
                    hola, Teléfono
                </div>
            </div>

            <input type="submit" value="Enviar" name="btn_register" class="btn btn-outline-primary">

        </form>
    </div>

    <?php

    if (isset($_POST['btn_register'])){

        $names = $_POST['names'];
        $lastnames = $_POST['lastnames'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];


        echo "NOMBRE: ". $names ."<br>";
        echo "APELLIDO: ". $lastnames ."<br>";
        echo "EMAIL: ". $email ."<br>";
        echo "TELEFONO". $phone ."<br>";

    }

    ?>
</div>

<script src="../boostrap/jquery-slim.min.js"></script>
<script src="../boostrap/bootstrap.min.js"></script>
<script src="validity.js"></script>

</body>
</html>