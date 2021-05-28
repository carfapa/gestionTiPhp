<?php


class Clinica
{
    private static $num_pacientes=0;

    #Dados patologia-cancer
    private static $num_enfermos_cancer=0;
    private static $num_enfermos_cancer_leve=0;
    private static $num_enfermos_cancer_grave=0;
    private static $num_enfermos_cancer_agudo=0;

    #Dados patologia-malaria
    private static $num_enfermos_malaria=0;
    private static $num_enfermos_malaria_leve=0;
    private static $num_enfermos_malaria_grave=0;
    private static $num_enfermos_malaria_agudo=0;



    #Dados patologia-tuberculosis
    private static $num_enfermos_tuberculosis=0;
    private static $num_enfermos_tuberculosis_leve=0;
    private static $num_enfermos_tuberculosis_grave=0;
    private static $num_enfermos_tuberculosis_agudo=0;

    //datos de categoria de la patelogia
    private static $num_enfermos_leve=0;
    private static $num_enfermos_grave=0;
    private static $num_enfermos_agudo=0;


    private static $list_pacientes = array();

    public static function registrar_paciente($paciente)
    {
        if(self::paciente_existe($paciente))
        {
            return "Ya se encuentra registrado";
        }
        self::$list_pacientes[] = $paciente;
        self::$num_pacientes +=1;
        self::procesar_enfermedades($paciente);
    }

    private static function paciente_existe($paciente){
        foreach (self::$list_pacientes as $temp_pacinete)
        {
            if($temp_pacinete->num_identificacion == $paciente->get_num_identificacion()){
                return true;
            }
        }
        return false;
    }

    private static function procesar_enfermedades($paciente)
    {
        if ($paciente->get_enfermedad() == "cancer")
        {
            self::$num_enfermos_cancer +=1;
            if($paciente->get_categofia_enfermedad() == "leve"){
                self::$num_enfermos_cancer_leve +=1;
                self::$num_enfermos_leve+=1;
            }
            elseif ($paciente->get_categofia_enfermedad()== "grave"){
                self::$num_enfermos_cancer_grave +=1;
                self::$num_enfermos_grave+=1;
            }
            elseif ($paciente->get_categofia_enfermedad() == "agudo"){
                self::$num_enfermos_cancer_agudo +=1;
                self::$num_enfermos_agudo+=1;
            }
        }
        elseif ($paciente->get_enfermedad() == "malaria")
        {
            self::$num_enfermos_malaria +=1;
            if($paciente->get_categofia_enfermedad() == "leve"){
                self::$num_enfermos_malaria_leve +=1;
                self::$num_enfermos_leve+=1;
            }
            elseif ($paciente->get_categofia_enfermedad() == "grave"){
                self::$num_enfermos_malaria_grave +=1;
                self::$num_enfermos_grave+=1;
            }
            elseif ($paciente->get_categofia_enfermedad() == "agudo"){
                self::$num_enfermos_malaria_agudo +=1;
                self::$num_enfermos_agudo+=1;
            }
        }
        elseif ($paciente->get_enfermedad() == "tuberculosis")
        {
            self::$num_enfermos_tuberculosis +=1;
            if($paciente->get_categofia_enfermedad() == "leve"){
                self::$num_enfermos_tuberculosis_leve +=1;
                self::$num_enfermos_leve+=1;
            }
            elseif ($paciente->get_categofia_enfermedad() == "grave"){
                self::$num_enfermos_tuberculosis_grave +=1;
                self::$num_enfermos_grave+=1;
            }
            elseif ($paciente->get_categofia_enfermedad() == "agudo"){
                self::$num_enfermos_tuberculosis_agudo +=1;
                self::$num_enfermos_agudo+=1;
            }
        }
    }



    static function get_num_enfermos_cancer(){
        return self::$num_enfermos_cancer;
    }
    static function get_num_enfermos_malaria(){
        return self::$num_enfermos_malaria;
    }
    static function get_num_enfermos_tuberculosis(){
        return self::$num_enfermos_tuberculosis;
    }
    static function get_num_pacientes(){
        return self::$num_pacientes;
    }
    static function get_pacientes(){
        return self::$list_pacientes;
    }



    function get_num_enfermos_leve(){
        return self::$num_enfermos_leve;
    }
    function get_num_enfermos_grave(){
        return self::$num_enfermos_grave;
    }
    function get_num_enfermos_agudo(){
        return self::$num_enfermos_agudo;
    }

}



class Paciente{

    static private $id = 0;
    private $nombre;
    private $apellido;
    private $tipo_identificicacion;
    private $num_identificacion;
    private $enfermedad;
    private $categofia_enfermedad;
    private $fecha_diagnostico;
    private $tiene_tratamiento;
    private $nombre_tratamiento;
    private $telefono;

    function __construct($nombre, $apellido, $tipo_identificicacion, $num_identificacion, $enfermedad,
                         $categofia_enfermedad, $fecha_diagnostico, $tiene_tratamiento, $nombre_tratamiento, $telefono){
        self::$id += 1;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->tipo_identificicacion = $tipo_identificicacion;
        $this->num_identificacion = $num_identificacion;
        $this->enfermedad = $enfermedad;
        $this->categofia_enfermedad = $categofia_enfermedad;
        $this->fecha_diagnostico = $fecha_diagnostico;
        $this->tiene_tratamiento = $tiene_tratamiento;
        $this->nombre_tratamiento = $nombre_tratamiento;
        $this->telefono = $telefono;

    }

    #Getter y setter - nombre
    function set_nombre($nombre){
        $this->nombre = $nombre;
    }
    function get_nombre(){
        return $this->nombre;
    }

    #Getter y setter - apellido
    function set_apellidp($apellido){
        $this->apellido = $apellido;
    }
    function get_apellido(){
        return $this->apellido;
    }

    #Getter y setter - tipo de identificacion
    function set_tipo_identificicacion($tipo_identificicacion){
        $this->tipo_identificicacion = $tipo_identificicacion;
    }
    function get_tipo_identificicacion(){
        return $this->tipo_identificicacion;
    }

    #Getter y setter - identificacion
    function set_num_identificacion($num_identificacion){
        $this->num_identificacion = $num_identificacion;
    }
    function get_num_identificacion(){
        return $this->num_identificacion;
    }

    #Getter y setter - enfermedad
    function set_enfermedad($enfermedad){
        $this->enfermedad = $enfermedad;
    }
    function get_enfermedad(){
        return $this->enfermedad;
    }

    #Getter y setter - categoria
    function set_categofia_enfermedad($categofia_enfermedad){
        $this->categofia_enfermedad = $categofia_enfermedad;

    }
    function get_categofia_enfermedad(){
        return $this->categofia_enfermedad;
    }

    #Getter y setter - fecha_diagnostico
    function set_fecha_diagnostico($fecha_diagnostico){
        $this->fecha_diagnostico = $fecha_diagnostico;

    }
    function get_fecha_diagnostico(){
        return $this->fecha_diagnostico;
    }

    #Getter y setter - tiene tratamiento
    function set_tiene_tratamiento($tiene_tratamiento){
        $this->tiene_tratamiento = $tiene_tratamiento;
    }
    function get_tiene_tratamiento(){
        return $this->tiene_tratamiento;
    }

    //Getter y setter - nombre-tratamiento
    function set_nombre_tratamiento($nombre_tratamiento){
        $this->categofia_enfermedad = $nombre_tratamiento;
    }
    function get_nombre_tratamiento(){
        return $this->nombre_tratamiento;
    }

    //Getter y setter - telefono
    function set_telefono($telefono){
        $this->telefono = $telefono;
    }
    function get_telefono(){
        return $this->telefono;
    }


}