<?php
include('app.php');

$usuario1 = new Usuario('carlos', 'palacios', 'cc', 193,'car@gmail.com',
    'cfpp', '1234');
echo "ID: ". $usuario1->get_id() ."     NOMBRE: ". $usuario1->get_nombre() ."<br>";


$usuario2 = new Estudiante('fabian', 'palacios palacios', 'cc', 11932,
    'cf@gmail.com', 'cf', 'ab11', array('backend', 'frontend'), 5);
echo "ID: ". $usuario2->get_id() ."     NOMBRE: ". $usuario2->get_nombre() ."<br>";


$usuario3 = new Administrador('carfa', 'palacios palacios', 'cc', 11932,
    'cf@gmail.com', 'cfp', 'a-11');
echo "ID: ". $usuario3->get_id() ."     NOMBRE: ". $usuario3->get_nombre() ."<br>";

















