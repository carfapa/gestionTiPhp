<?php

//SISTEMAS ESTUDIANTIL

class Usuario
{
    protected static $id=0;
    private $nombre;
    private $apellido;
    private $tipo_documento;
    private $identificacion;
    private $email;
    private $usuario;
    private $clave;

    function __construct($nombre, $apellido, $tipo_documento, $identificacion, $email, $usuario, $clave)
    {
        self::$id += 1;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->tipo_documento = $tipo_documento;
        $this->identificacion = $identificacion;
        $this->email = $email;
        $this->usuario = $usuario;
        $this->clave = $clave;
    }
    function get_id(){
        return self::$id;
    }


    function set_nombre($nombre){
        $this->nombre = $nombre;
    }
    function get_nombre(){
        return $this->nombre;
    }

    function set_apellido($apellido){
        $this->apellido = $apellido;
    }
    function get_apellido(){
        return $this->apellido;
    }

    function set_tipo_documento($type){
        $this->tipo_documento = $type;
    }
    function get_tipo_documento(){
        return $this->tipo_documento;
    }

    function set_identificacion($identificacion){
        $this->identificacion = $identificacion;
    }
    function get_identificacion(){
        return $this->identificacion;
    }

    function set_email($email){
        $this->email = $email;
    }
    function get_email(){
        return $this->email;
    }

    function set_usuario($usuario){
        $this->usuario = $usuario;
    }
    function get_usuario(){
        return $this->usuario;
    }

    function set_clave($clave){
        $this->clave = $clave;
    }
    function get_clave(){
        return $this->clave;
    }
}




class Estudiante extends usuario
{
    private $cursos;
    private $nivel;
    function __construct($nombre, $apellido, $tipo_documento, $identificacion, $email, $usuario, $clave, $cursos, $nivel)
    {
        parent::__construct($nombre, $apellido, $tipo_documento, $identificacion, $email, $usuario, $clave);
        $this->cursos = $cursos;
        $this->nivel = $nivel;
    }

    function set_cursos($cursos){
        $this->cursos = $cursos;
    }
    function get_cursos(){
        return $this->cursos;
    }

    function set_nivel($nivel){
        $this->nivel = $nivel;
    }
    function get_nivel(){
        $this->nivel;
    }
}


class Profesor extends usuario
{
    private $cursos;
    private $tipo_vinculacion;
    function __construct($nombre, $apellido, $tipo_documento, $identificacion, $email, $usuario, $clave, $cursos)
    {
        parent::__construct($nombre, $apellido, $tipo_documento, $identificacion, $email, $usuario, $clave);
        $this->cursos = $cursos;
    }

    function set_cursos($cursos){
        $this->cursos = $cursos;
    }
    function get_cursos(){
        return $this->cursos;
    }

    function set_tipo_vinculacion($tipo_vinculacion){
        $this->tipo_vinculacion = $tipo_vinculacion;
    }
    function get_tipo_vinculacion(){
        return $this->tipo_vinculacion;
    }
}


class Administrador extends usuario
{
    function __construct($nombre, $apellido, $tipo_documento, $identificacion, $email, $usuario, $clave)
    {
        parent::__construct($nombre, $apellido, $tipo_documento, $identificacion, $email, $usuario, $clave);
    }
}


class Facultad
{
    private $nombre;
    private $programas;
    private $cant_progrmas;
    function __construct($nombre, $programas, $cant_progrmas){
        $this->nombre = $nombre;
        $this->programas = $programas;
        $this->cant_progrmas = $cant_progrmas;
    }

    function set_nombre($nombre){
        $this->nombre = $nombre;
    }
    function get_nombre(){
        return $this->nombre;
    }

    function set_programas($programas){
        $this->programas = $programas;
    }
    function get_programas(){
        return $this->programas;
    }

    function get_cant_programas(){
        return $this->cant_progrmas;
    }

}


class Programa
{
    private $nombre;
    private $asignaturas;
    private $cant_creditos;
    private $cant_semestres;
    protected $codigo;
    function __construct($nombre, $asignaturas, $cant_creditos, $cant_semestres, $codigo){
        $this->nombre = $nombre;
        $this->asignaturas = $asignaturas;
        $this->cant_creditos = $cant_creditos;
        $this->cant_semestres = $cant_semestres;
        $this->codigo = $codigo;

    }

    function set_nombre($nombre){
        $this->nombre = $nombre;
    }
    function get_nombre(){
        return $this->nombre;
    }

    function set_asignatura($asignaturas){
        $this->asignaturas = $asignaturas;
    }
    function get_asignaturas(){
        return $this->asignaturas;
    }

    function set_cant_creditos($cant_creditos){
        $this->cant_creditos = $cant_creditos;
    }
    function get_cant_creditos(){
        return $this->cant_creditos;
    }

    function set_cant_semestres($cant_semestre){
        $this->cant_semestres = $cant_semestre;
    }
    function get_cant_semestres(){
        return $this->cant_semestres;
    }

    function get_codigo(){
        return $this->codigo;
    }
}


class Asignatura
{
    private $nombre;
    private $creditos;
    private $num_estudiantes;
    private $codigo;
    function __construct($nombre, $creditos, $num_estudiantes, $codigo)
    {
        $this->nombre = $nombre;
        $this->creditos = $creditos;
        $this->num_estudiantes = $num_estudiantes;
        $this->codigo = $codigo;
    }

    function set_nombre($nombre){
        $this->nombre = $nombre;
    }
    function get_nombre(){
        return $this->nombre;
    }

    function set_creditos($creditos){
        $this->creditos = $creditos;
    }
    function get_creditos(){
        return $this->creditos;
    }

    function set_num_estudiante($num_estudiantes){
        $this->num_estudiantes = $num_estudiantes;
    }
    function get_num_estudiantes(){
        return $this->num_estudiantes;
    }

    function set_codigo($codigo){
        $this->codigo = $codigo;
    }
    function get_codigo(){
        return $this->codigo;
    }
}


class Nota
{
    private $nota1;
    private $nota2;
    private $nota_final;
    private $promedio;
    function __construct($nota1, $nota2, $nota_final)
    {
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota_final = $nota_final;
        $this->promedio = $this->calc_promedio();
    }

    function calc_promedio()
    {
        return ($this->nota1 + $this->nota2 + $this->nota_final) / 3;
    }
}