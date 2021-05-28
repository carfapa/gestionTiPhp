<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar</title>
    <link rel="stylesheet" href="boostrap/css/bootstrap.min.css">
</head>
<body class="card-body">

<div class="container">

    <header>

        <nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
            <a class="navbar-brand" href="#">MiniBlog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blogs.php">blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="agregar.php">Agregar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="actualizar.php">Actualizar</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="eliminar.php">Eliminar</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <main class="my-2">

        <div class="container jumbotron w-75 mx-auto">


            <form action="" method="post" class="w-75 mx-auto">
                <h3 class="text-center">Eliminar articulo</h3>

                <div class="form-group">
                    <label for="code">Código</label>
                    <input type="text" name="code" id="code" class="form-control">
                </div>

                <div class="input-group">
                    <input type="submit" name="btn-delete" value="Eliminar" class="btn btn-outline-primary w-50 m-auto">
                </div>


            </form>

            <?php
            $connection = mysqli_connect('localhost', 'root', '', 'prueba');
            mysqli_set_charset($connection, 'utf8');

            function validity_campo(&$campo){
                if(empty(!$campo)){
                    $campo_temp = $campo;
                    $campo = filter_var($campo_temp, FILTER_SANITIZE_STRING);
                    return true;
                }
                else{
                    return false;
                }
            }
            if (isset($_POST['btn-delete'])){
                $code = mysqli_real_escape_string($connection, $_POST['code']);
                if (validity_campo($code)){
                    $sql = "DELETE FROM articulos WHERE code_art = '". $code."'";
                    $result = mysqli_query($connection, $sql);
                    if (!$result){
                        //$exito = 0; // False = 0
                        echo " <div class=\"alert-danger text-center py-2\">Error, ocurrio un problema</div>";
                    }
                    else{
                        //$exito = 1; // true = 1
                        echo " <div class=\"alert-success text-center py-2\">Eliminado exitosamente</div>";
                    }

                }

            }
            mysqli_close($connection);
            ?>



        </div>

    </main>


    <br><br><br><br><br><br><br>

    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">miniblog.com</a>
        </div>
        <!-- Copyright -->
    </footer>

</div>

<script src="boostrap/js/jquery-slim.min.js"></script>
<script src="boostrap/js/bootstrap.min.js"></script>
</body>
</html>