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

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
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
                    <li class="nav-item active">
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

            <div class="w-75 d-md-flex justify-content-md-between font-weight-bold mx-auto my-3">
                <form class="form-inline" method="post">
                    <input class="form-control mr-sm-2" name="code" type="search" placeholder="Código articulo" aria-label="Search">
                    <input type="submit" class="btn btn-outline-primary my-2 my-sm-0"  value="Search" name="search">
                </form>

                <?php
                   $actual_title = ""; $actual_description = ""; $actual_text = ""; $actual_code = "";
                   if (isset($_POST['search']))
                   {
                       $code = $_POST['code'];
                       if (validity_campo($code)){
                           $sql = "SELECT title_art, description_art, text_art, code_art FROM articulos WHERE code_art = ?";
                           $sql_result_prepare = mysqli_prepare($connection, $sql);
                           $prepare_parameter = mysqli_stmt_bind_param($sql_result_prepare, 's', $code);
                           $consult_execute = mysqli_stmt_execute($sql_result_prepare);

                           if($consult_execute){
                               $consult_result = mysqli_stmt_bind_result($sql_result_prepare, $actual_title,
                                   $actual_description, $actual_text, $actual_code);
                               mysqli_stmt_fetch($sql_result_prepare);
                               mysqli_stmt_close($sql_result_prepare);
                           }
                           else{
                               echo " <div class=\"alert-danger text-center py-2\">Ha ocurrido un problema</div>";
                           }
                       }
                   }

                ?>

            </div>


            <form action="" method="post" class="w-75 mx-auto">
                <h3 class="text-center">Actualiza datos del articulo</h3>

                <div class="form-group">
                    <label for="code">Código</label>
                    <input type="text" name="code" id="code" value="<?php echo $actual_code;?>" class="form-control" maxlength="6" minlength="6" readonly required>
                </div>

                <div class="form-group">
                    <label for="title">Titulo</label>
                    <input type="text" name="title" id="title" value="<?php echo $actual_title;?>" class="form-control">
                </div>

                <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea name="description" id="description"  cols="30" rows="5" class="form-control"><?php echo $actual_description;?></textarea>
                </div>

                <div class="form-group">
                    <label for="text">Texto</label>
                    <textarea name="text" id="text"  cols="30" rows="5" class="form-control"><?php echo $actual_text; ?></textarea>
                </div>

                <div class="input-group">
                    <input type="submit" name="btn-update" value="Actualizar" class="btn btn-outline-primary w-50 m-auto">
                </div>


            </form>

        </div>

        <?php

        if (isset($_POST['btn-update'])){
            $code = mysqli_real_escape_string($connection, $_POST['code']);
            $new_title =  mysqli_real_escape_string($connection, $_POST['title']);
            $new_description = mysqli_real_escape_string($connection, $_POST['description']);
            $new_text = mysqli_real_escape_string($connection, $_POST['text']);
            if (validity_campo($new_title) && validity_campo($new_description) &&
                validity_campo($new_text))
            {
                $sql2 = "UPDATE articulos SET title_art = '". $new_title."', description_art = '". $new_description."',
                text_art = '". $new_text ."' WHERE code_art = '". $code."'";

                $result = mysqli_query($connection, $sql2);

                if (!$result){
                    echo " <div class=\"alert-danger text-center py-2\">Error, ocurrio un problema</div>";
                }
                else{
                    echo " <div class=\"alert-success text-center py-2\">Actualizado exitosamente</div>";
                }
                /*$sql2 = "UPDATE articulos SET title_art = ?, description_art = ?, text_art = ? WHERE code_art = ?";
                $sql_result_prepare2 = mysqli_stmt_prepare($connection, $sql2);
                $prepare_parameter2 = mysqli_stmt_bind_param($sql_result_prepare2, 'ssss', $new_title,
                    $new_description, $new_text, $code);
                $consult_execute = mysqli_stmt_execute($sql_result_prepare2);
                mysqli_stmt_close($sql_result_prepare2);
                if (!$consult_execute){
                    //$exito = 0; // False = 0
                    echo " <div class=\"alert-danger text-center py-2\">Error, ocurrio un problema</div>";
                }
                else{
                    //$exito = 1; // true = 1
                    echo " <div class=\"alert-success text-center py-2\">Agregado exitosamente</div>";
                }*/


            }

        }
        mysqli_close($connection);
        ?>

    </main>

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