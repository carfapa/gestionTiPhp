<?php

    $connection = mysqli_connect('localhost', 'root', '', 'prueba');
    mysqli_set_charset($connection, 'utf8');
    //$articulo = array();

    $title = ""; $description = ""; $text = ""; $code = ""; $datatieme = "";
    $sql = "SELECT title_art, description_art, text_art, code_art, date_create_art FROM articulos ORDER BY date_create_art DESC LIMIT 3";

    // SELECT * FROM `articulos` ORDER BY date_create_art DESC L
    $sql_result_prepare = mysqli_prepare($connection, $sql);
    //$prepare_parameter = mysqli_stmt_bind_param($sql_result_prepare);
    $consult_execute = mysqli_stmt_execute($sql_result_prepare);


    if($consult_execute){
        $consult_result = mysqli_stmt_bind_result($sql_result_prepare, $title,
            $description, $text, $code, $datatieme);
        //mysqli_stmt_fetch($sql_result_prepare);
        //mysqli_stmt_close($sql_result_prepare);

    }
    else{
        echo " <div class=\"alert-danger text-center py-2\">Ha ocurrido un problema</div>";
    }

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>inicio</title>
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
                   <li class="nav-item active">
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
                   <li class="nav-item">
                       <a class="nav-link" href="eliminar.php">Eliminar</a>
                   </li>

               </ul>
           </div>
       </nav>
   </header>

   <main class="my-2">

       <div class="jumbotron">
           <h2>Mini Blog</h2>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque consequuntur dicta esse, excepturi natus
               omnis placeat possimus praesentium quam repellat, reprehenderit repudiandae sapiente vitae. Aut deserunt
               fugit impedit numquam tempora.
           </p>
           <p> <a class="btn btn-primary btn-large" href="blogs.php">Leer ariculos</a> </p>
       </div>

       <h2 class="bg-info py-2 text-center text-dark mb-3">Ultimos articulos</h2>
       <div class="row">

           <?php
           $colors = ['bg-dark', 'bg-secondary', 'bg-info', 'bg-success', 'bg-primary', 'bg-warning'];
           ?>

           <?php while (mysqli_stmt_fetch($sql_result_prepare)): ?>
               <?php
               $color = $colors[rand(0, 5)];
               ?>

               <div class="col-md-4">
                   <div class="card mb-4 box-shadow">
                       <div class="jumbotron <?php echo $color ?> py-5">
                           <i class="m-auto text-light"> <?php echo $title ?> </i>
                       </div>
                       <div class="card-body">
                           <p class="card-text"> <?php echo $description ?> </p>
                           <div class="d-flex justify-content-between align-items-center">
                               <div class="btn-group">
                                   <form action="blog.php" method="get">
                                       <button type="submit" name="view-blog" value="<?php echo $code ?>" class="btn btn-sm btn-outline-secondary">View</button>
                                   </form>
                               </div>
                               <small class="text-muted"><?php echo $datatieme ?></small>
                           </div>
                       </div>
                   </div>
               </div>

           <?php endwhile; ?>
           <?php
           mysqli_stmt_close($sql_result_prepare);
           mysqli_close($connection);
           ?>


       </div>

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