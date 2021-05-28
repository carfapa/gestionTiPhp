<?php
 $this_pag = $_SERVER['PHP_SELF'];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar</title>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="agregar.php">Agregar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="actualizar.php">Actualizar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="eliminar.php">Eliminar</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <main class="my-2">

        <div class="container jumbotron w-75 mx-auto">

            <form action=" <?php echo $this_pag; ?> " method="post" class="w-75 mx-auto">
                <h2 class="display-5 text-center">Crea tu articulo</h2>
                <div class="form-group">
                    <label for="code">Código</label>
                    <input type="text" name="code" id="code" class="form-control" maxlength="6" minlength="6" required>
                </div>

                <div class="form-group">
                    <label for="title">Titulo</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control" required>
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="texto">Texto</label>
                    <textarea name="text" id="text" cols="30" rows="10" class="form-control" required>
                    </textarea>
                </div>

                <div class="input-group">
                    <input type="submit"  name="btn-create" value="Agregar" class="btn btn-outline-primary w-50 m-auto">
                </div>
            </form>


        </div>

    </main>

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


    if (isset($_POST['btn-create'])){
        $code = $_POST['code'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $text = $_POST['text'];
        date_default_timezone_set('America/Bogota');
        $fecha_hrs = date('Y-m-d G:i:s');
        if ( validity_campo($code) && validity_campo($title) && validity_campo($description) &&
        validity_campo($text) ){
            $sql = "INSERT INTO articulos(code_art, title_art, description_art, text_art, date_create_art) VALUES(?,?,?,?,?)";
            //Preparando consulta sql
            $sql_rsult_prepare = mysqli_prepare($connection, $sql);
            //Preparando parametros para la conulta SQL(ya preparada)
            $prepare_parameter = mysqli_stmt_bind_param($sql_rsult_prepare, 'sssss', $code, $title, $description, $text, $fecha_hrs);
            //Ejecunta consulta
            $consult_execute = mysqli_stmt_execute($sql_rsult_prepare);
            mysqli_stmt_close($sql_rsult_prepare);

            if (!$consult_execute){
                //$exito = 0; // False = 0
                echo " <div class=\"alert-danger text-center py-2\">Error, ocurrio un problema</div>";
            }
            else{
                //$exito = 1; // true = 1
                echo " <div class=\"alert-success text-center py-2\">Agregado exitosamente</div>";
            }

        }
    }
    mysqli_close($connection);
    ?>
    <br><br>
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