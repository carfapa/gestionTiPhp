<?php

function get_num_paciones(){
    $connection = mysqli_connect('localhost', 'root', '', 'prueba');
    $sql = "SELECT COUNT('*') FROM pacientes";
    $result_consult = mysqli_query($connection, $sql);
    $num_pacientes = mysqli_fetch_row($result_consult);
    mysqli_close($connection);
    return $num_pacientes[0];
    //SELECT COUNT('*') FROM `pacientes` WHERE categoria_enfermedad = "leve";
}

function get_num_paciones_cancer(){
    $connection = mysqli_connect('localhost', 'root', '', 'prueba');
    $sql = "SELECT COUNT('*') FROM pacientes WHERE nom_enfermadad = 'cancer'";
    $result_consult = mysqli_query($connection, $sql);
    $num_pacientes = mysqli_fetch_row($result_consult);
    mysqli_close($connection);
    return $num_pacientes[0];
    //SELECT COUNT('*') FROM `pacientes` WHERE categoria_enfermedad = "leve";
}

function get_num_paciones_tuberculosis(){
    $connection = mysqli_connect('localhost', 'root', '', 'prueba');
    $sql = "SELECT COUNT('*') FROM pacientes WHERE nom_enfermadad = 'tuberculosis'";
    $result_consult = mysqli_query($connection, $sql);
    $num_pacientes = mysqli_fetch_row($result_consult);
    mysqli_close($connection);
    return $num_pacientes[0];
    //SELECT COUNT('*') FROM `pacientes` WHERE categoria_enfermedad = "leve";
}

function get_num_paciones_malaria(){
    $connection = mysqli_connect('localhost', 'root', '', 'prueba');
    $sql = "SELECT COUNT('*') FROM pacientes WHERE nom_enfermadad = 'malaria'";
    $result_consult = mysqli_query($connection, $sql);
    $num_pacientes = mysqli_fetch_row($result_consult);
    mysqli_close($connection);
    return $num_pacientes[0];
    //SELECT COUNT('*') FROM `pacientes` WHERE categoria_enfermedad = "leve";
}


function get_num_diagnostico_leve(){
    $connection = mysqli_connect('localhost', 'root', '', 'prueba');
    $sql = "SELECT COUNT('*') FROM `pacientes` WHERE categoria_enfermedad = 'leve'";
    $result_consult = mysqli_query($connection, $sql);
    $num_pacientes = mysqli_fetch_row($result_consult);
    mysqli_close($connection);
    return $num_pacientes[0];
    //SELECT COUNT('*') FROM `pacientes` WHERE categoria_enfermedad = "leve";
}

function get_num_diagnostico_grave(){
    $connection = mysqli_connect('localhost', 'root', '', 'prueba');
    $sql = "SELECT COUNT('*') FROM `pacientes` WHERE categoria_enfermedad = 'grave'";
    $result_consult = mysqli_query($connection, $sql);
    $num_pacientes = mysqli_fetch_row($result_consult);
    mysqli_close($connection);
    return $num_pacientes[0];
    //SELECT COUNT('*') FROM `pacientes` WHERE categoria_enfermedad = "leve";
}

function get_num_diagnostico_aguda(){
    $connection = mysqli_connect('localhost', 'root', '', 'prueba');
    $sql = "SELECT COUNT('*') FROM `pacientes` WHERE categoria_enfermedad = 'aguda'";
    $result_consult = mysqli_query($connection, $sql);
    $num_pacientes = mysqli_fetch_row($result_consult);
    mysqli_close($connection);
    return $num_pacientes[0];
    //SELECT COUNT('*') FROM `pacientes` WHERE categoria_enfermedad = "leve";
}

function cal_num_pacientes_all_patologias(){
    echo "";
}


