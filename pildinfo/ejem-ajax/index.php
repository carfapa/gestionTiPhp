

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title> Acción onclick en js </title>
    <!-- Aquí esta la referencia a jquery-->
    <script src="jquery-3.5.1.min.js"></script>
    <!--<script src="jquery-3.5.1.js"></script>-->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
    <script src="main.js"></script>
</head>
<body>
<form method="post" id="formulario">
    <input type="text" name="usuario" placeholder="Usuario" autofocus/>
    <input type="password" name="contrasena" placeholder="Contraseña"/>
    <input type="button" id="btn-ingresar" value="Ingresar" />
</form>
<!-- Este div nos servirá para cachar la respuesta enviada -->
<!-- por el backend en caso de que sea necesario. -->
<div id="resp"></div>
</body>
</html>