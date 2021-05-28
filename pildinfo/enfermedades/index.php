<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.js" type="text/javascript"></script>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="main.js"></script>
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
            <form action="" method="post" id="form-registro">
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
                    <input type="date" name="fecha-diagnostico" id="fecha-diagnostico" class="form-control" required>
                </div>
                <div class="form-group">
                    <div class="form-check form-control" style="border:none !important; border-top: 1px solid #c4b4b4 !important;">
                        <input class="form-check-input" type="checkbox" name="tine-tratamineto" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">Esta en tratamiento</label>
                    </div>
                    <input type="text" name="tratamiento" id="tratamiento" class="form-control" placeholder="Nombre del tratamiento(opcional)">
                </div>
                <div class="form-group">
                    <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Teléfono" required>
                </div>

                <input type="submit" value="Registrar" name="registrar" class="btn btn-primary  form-control">
            </form>
            <?php
                include('hospital.php');
                if (isset($_POST['registrar'])){
                    $nombre = $_POST['nombre'];
                    $apellido = $_POST['apellido'];
                    $tipo_identificicacion = $_POST['tipo-documento'];
                    $num_identificacion = $_POST['n-identificacion'];
                    $enfermedad = $_POST['enfermedad'];
                    $categofia_enfermedad = $_POST['categoria-enfermedad'];
                    $fecha_diagnostico = $_POST['fecha-diagnostico'];
                    $tiene_tratamiento = $_POST['tine-tratamineto'];
                    $nombre_tratamiento = $_POST['tratamiento'];
                    if($tiene_tratamiento == "on"){
                        $tratamiento = true;
                    }else{
                        $tratamiento = true;
                        $nombre_tratamiento = "";
                    }
                    $telefono = $_POST['telefono'];
                    $paciente = new Paciente($nombre, $apellido, $tipo_identificicacion, $num_identificacion,
                        $enfermedad, $categofia_enfermedad, $fecha_diagnostico, $tratamiento, $nombre_tratamiento, $telefono);
                    Clinica::registrar_paciente($paciente);
                }

            ?>


        </section>

        <section class="col-md-6">
            <ul class="list-group">
                <li class="list-group-item active d-flex justify-content-between align-items-center">
                    Datos generales
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pacientes
                    <span class="badge badge-primary badge-pill"> <?php echo Clinica::get_num_pacientes() ?> </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pacientes con cancer
                    <span class="badge badge-primary badge-pill">  <?php echo Clinica::get_num_enfermos_cancer() ?> </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pacientes con malaria
                    <span class="badge badge-primary badge-pill"> <?php echo Clinica::get_num_enfermos_malaria() ?> </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pacientes con tuberculosis
                    <span class="badge badge-primary badge-pill"> <?php echo Clinica::get_num_enfermos_tuberculosis() ?></span>
                </li>
            </ul>
            <br><br>

            <ul class="list-group">
                <li class="list-group-item active d-flex justify-content-between align-items-center">
                    Datos respecto a las cetgoria de las patologías
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Diagnostico leve
                    <span class="badge badge-primary badge-pill">0</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Diagnostico grave
                    <span class="badge badge-primary badge-pill">0</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Diagnostico agudo
                    <span class="badge badge-primary badge-pill">0</span>
                </li>
            </ul>
        </section>
    </main>



</div>




<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button> <a class="navbar-brand" href="#">Marca</a>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav">
						<li class="nav-item active">
							 <a class="nav-link" href="#">Enlace <span class="sr-only">(Actual)</span></a>
						</li>
						<li class="nav-item">
							 <a class="nav-link" href="#">Enlace</a>
						</li>
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Enlace desplegable</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider">
								</div> <a class="dropdown-item" href="#">Separated link</a>
							</div>
						</li>
					</ul>
					<form class="form-inline">
						<input class="form-control mr-sm-2" type="text" />
						<button class="btn btn-primary my-2 my-sm-0" type="submit">
							Buscar
						</button>
					</form>
					<ul class="navbar-nav ml-md-auto">
						<li class="nav-item active">
							 <a class="nav-link" href="#">Enlace <span class="sr-only">(Actual)</span></a>
						</li>
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Enlace desplegable</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider">
								</div> <a class="dropdown-item" href="#">Separated link</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<div class="jumbotron">
				<h2>
					¡Hola Mundo!
				</h2>
				<p>
					Esta es una plantilla para un sitio web simple de marketing o informativo. Incluye una leyenda grande llamada unidad de héroe y tres piezas de contenido de apoyo. Úselo como punto de partida para crear algo más único.
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="#">Aprende más</a>
				</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<h2>
				Bóveda
			</h2>
			<p>
				Donec id elit non mi porta gravida en eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="#">Ver detalles "</a>
			</p>
		</div>
		<div class="col-md-4">
			<h2>
				Bóveda
			</h2>
			<p>
				Donec id elit non mi porta gravida en eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="#">Ver detalles "</a>
			</p>
		</div>
		<div class="col-md-4">
			<h2>
				Bóveda
			</h2>
			<p>
				Donec id elit non mi porta gravida en eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="#">Ver detalles "</a>
			</p>
		</div>
	</div>
</div>

</body>
</html>

