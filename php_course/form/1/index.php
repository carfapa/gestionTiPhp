<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="app.php" METHOD="post">
        <table>
            <tr>
                <td>Nombre</td>
                <td> <input type="text" name="nombre" id="nombre"> </td>
            </tr>
            <tr>
                <td>Apellido</td>
                <td><input type="text" name="apellido" id="apellido"></td>
            </tr>
            <tr>
                <td>Edad</td>
                <td><input type="number" name="edad" id="edad"></td>
            </tr>
            <tr>
                <td>Teléfono</td>
                <td><input type="text" name="telefono" id="telefono"></td>
            </tr>
            <tr>
                <td><label for="sexo">Sexo</label> </td>
                <td>
                    <input type="radio" name="sexo" id="hombre" value="hombre">
                    <label for="hombre">Hombre</label>
                </td>
                <td>
                    <input type="radio" name="sexo" id="mujer" value="mujer">
                    <label for="mujer">Mujer</label>
                </td>
            </tr>
            <tr><td><p>Eligie las ciudades que te gustaria conocer</p></td></tr>
            <tr>
                <td>
                    <label for="madrid">madrid</label>
                    <input type="checkbox" name="ciudades[]" id="madrid" value="madrid">
                </td>
                <td>
                    <label for="newyork">New York</label>
                    <input type="checkbox" name="ciudades[]" id="newyork" value="newyork">
                </td>
                <td>
                    <label for="quibdo">Quibdo </label>
                    <input type="checkbox" name="ciudades[]" id="quibdo" value="quibdo">
                </td>
                <td>
                    <label for="santorini">Santorini</label>
                    <input type="checkbox" name="ciudades[]" id="santorini" value="santorini">
                </td>

            </tr>
            <tr>
                <td> <label for="">Aceptas los terminos y condiciones</label> </td>
                <td> <input type="checkbox" name="terminos_y_condiciones" id="terminos_y_condiciones"> </td>
            </tr>
            <tr>
                <td></td>
                <td> <input type="submit" value="Enviar"> </td>
            </tr>

        </table>
    </form>
</body>
</html>