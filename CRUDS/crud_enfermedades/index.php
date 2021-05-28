<?php include('estadistica.php')?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/main.js"></script>
    <style>
        .menu{
            background-color: #e3f2fd !important;
        }
    </style>
</head>
<body>

<div class="container">

    <nav class="navbar navbar-expand-lg navbar-light bg-light menu">
        <a class="navbar-brand" href="#">App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Enfermades</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <main class="row my-2">
        <section class="col-md-6">
            <form action="hospital.php" method="post" id="form-registro">
                <div class="row">
                    <div class="form-group col-md-6">
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <select name="tipo-documento" class="form-control"  required>
                            <option value="">Tipo de documento</option>
                            <option value="ti">Tarjeta de identidad</option>
                            <option value="cc">Cedula de ciudadania</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="n-identificacion" id="n-identificacion" class="form-control" placeholder="Número de identificación" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <select name="enfermedad" class="form-control" required>
                            <option value="">Enfermedad</option>
                            <option value="cancer">Cancer</option>
                            <option value="malaria">Malaria</option>
                            <option value="tuberculosis">Tuberculosis</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <select name="categoria-enfermedad" class="form-control" required>
                            <option value="">Categoria enfermedad</option>
                            <option value="leve">Leve</option>
                            <option value="grave">Grave</option>
                            <option value="aguda">Aguda</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="form-control" style="border:none !important; border-top: 1px solid #c4b4b4 !important;">Fecha del diagnosticaron</label>
                    <input type="date" name="fecha-diagnostico" id="fecha-diagnostico" class="form-control" placeholder="aaaa/mm/dd"   required>
                </div>
                <div class="form-group">
                    <div class="form-check form-control" style="border:none !important; border-top: 1px solid #c4b4b4 !important;">
                        <input class="form-check-input" type="checkbox" name="tiene-tratamineto" id="tiene_tratamiento">
                        <label class="form-check-label" for="gridCheck">Esta en tratamiento</label>
                        <script>
                            window.addEventListener('load', function (){

                                let tratamiento = document.getElementById('tiene_tratamiento');
                                let nombre_tratamiento = document.getElementById('tratamiento');
                                let msg_require_nom = "opcional";
                                tratamiento.addEventListener('click', function (){
                                    if (msg_require_nom === "opcional"){
                                        nombre_tratamiento.setAttribute('placeholder', 'Nombre del tratamiento(requerido)');
                                        nombre_tratamiento.setAttribute('required', 'required');
                                        console.log(nombre_tratamiento.getAttribute('required'));
                                        msg_require_nom = "required"
                                    }
                                    else {
                                        //nombre_tratamiento.setAttribute('placeholder', 'Nombre del tratamiento(opcional)');
                                        msg_require_nom = "opcional";
                                        nombre_tratamiento.removeAttribute('required');
                                    }

                                })

                            }, false);


                        </script>
                    </div>
                    <input type="text" name="tratamiento" id="tratamiento" class="form-control" placeholder="Nombre del tratamiento(opcional)">
                </div>
                <div class="form-group">
                    <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Teléfono" required>
                </div>

                <input type="submit" value="Registrar" name="registrar" class="btn btn-primary  form-control">
            </form>
        </section>

        <section class="col-md-6">
            <ul class="list-group">
                <li class="list-group-item active d-flex justify-content-between align-items-center">
                    Datos generales
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pacientes
                    <span class="badge badge-primary badge-pill"> <?php echo get_num_paciones()?> </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pacientes con cancer
                    <span class="badge badge-primary badge-pill"> <?php echo get_num_paciones_cancer()?> </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pacientes con malaria
                    <span class="badge badge-primary badge-pill"> <?php echo get_num_paciones_malaria()?> </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pacientes con tuberculosis
                    <span class="badge badge-primary badge-pill"> <?php echo get_num_paciones_tuberculosis()?> </span>
                </li>
            </ul>
            <br><br>

            <ul class="list-group">
                <li class="list-group-item active d-flex justify-content-between align-items-center">
                    Datos respecto a las cetgoria de las patologías
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Diagnostico leve
                    <span class="badge badge-primary badge-pill"><?php echo get_num_diagnostico_leve() ?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Diagnostico grave
                    <span class="badge badge-primary badge-pill"> <?php echo get_num_diagnostico_grave() ?> </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Diagnostico agudo
                    <span class="badge badge-primary badge-pill"> <?php echo get_num_diagnostico_aguda() ?> </span>
                </li>
            </ul>
        </section>
    </main>

</div>

</body>
</html>

