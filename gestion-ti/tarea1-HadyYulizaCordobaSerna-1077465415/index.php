<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea1</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form action="tarea1-HadyYulizaCordobaSerna-1077465415.php" method="post">

        <h1>Tarea 1</h1>
    <p>
    Elabore un programa que capture nombre, direcciòn, telèfono, barrio y el àrea 
    construida de un inmueble. </p>
    <p>
    El programa debe imprimir los datos suministrados y el valor catastral que debe 
    pagar el propietario tenniendo en cuenta la siguiente tarifa catastral: 200.00 
    por metro cuadrado para el estrato 1, 220.00 por metro cuadrado para el estracto 
    2, 240.00 por metro cuadrado para el estracto 3, 300.00 por metro cadrado para el
    estracto 4, 400.00 por metro cuadrado para el estracto 5.
    </p>
      
        <input type="text" name="nombre" placeholder="Ingrese su nombre">
        <input type="number" name="tel" placeholder="Ingrese su nùmero de telèfono">
        <input type="text" name="direc" placeholder="Ingrese su direcciòn residencial">
        <input type="text" name="bar" placeholder="Ingrese su barrio residencial">
        <input type="number" name="area"  placeholder="Ingrese el area del inmueble">
        <input type="number" name="estracto" min="1" max="5" placeholder="Ingrese su estracto">

        <input type="submit" value="¡Presioname!">
    </form>
 
</body>
</html>