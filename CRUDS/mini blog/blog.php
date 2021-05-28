
<?php
if (isset($_GET['view-blog'])){
    $code = $_GET['view-blog'];

    $connection = mysqli_connect('localhost', 'root', '', 'prueba');
    mysqli_set_charset($connection, 'utf8');
    $sql2 = "SELECT title_art, description_art, text_art, code_art, date_create_art FROM articulos WHERE code_art = ?";
    $sql_result_prepare = mysqli_prepare($connection, $sql2);
    $prepare_parameter = mysqli_stmt_bind_param($sql_result_prepare, 's',  $code);
    $consult_execute = mysqli_stmt_execute($sql_result_prepare);
    if ($consult_execute){
        $consult_result = mysqli_stmt_bind_result($sql_result_prepare, $title,
            $description, $text, $code, $datatieme);
        //mysqli_stmt_fetch($sql_result_prepare);
    }

}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blog/<?php $title ?></title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="eliminar.php">Eliminar</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <main class="my-2">

        <div class="container">

            <?php while (mysqli_stmt_fetch($sql_result_prepare)): ?>
                <br>
                <h1 class="text-center text-info"> <?php echo  $title; ?></h1>   <br>
                <p>
                    <?php echo  $description; ?>
                </p>
                <p>
                    <?php echo  $text; ?>
                </p>


            <?php endwhile; ?>

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
