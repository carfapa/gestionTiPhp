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

    <form action="insert.php" method="post" class="jumbotron w-50 m-auto">
        <p class="p font-weight-bold">Formulario de Registro</p>
        <div class="form-group">
            <label for="id" class="">ID</label>
            <input type="number" name="id" id="id" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad" class="form-control" required>
        </div>

        <div class="form-group w-100">
            <input type="submit" name="btn_registrar" value="Registrar" class="btn btn-outline-primary w-50 m-auto">
        </div>


    </form>

</div>




</body>
</html>


