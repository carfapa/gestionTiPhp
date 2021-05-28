

<?php

    class Coche
    {
        public $ruedas;
        public $color;
        public $motor;

        function __construct(){
            $this->color = 'blanco';
            $this->ruedas = 4;
            $this->motor = "lm2";
        }

        function arrancar()
        {
            echo "ha arrancado" ."<br>";
        }

        function girar()
        {
            echo "Ha girado" ."<br>";
        }

        function frenar()
        {
            echo "Ha frenado" ."<br>";
        }

        function caracteristicas(){
            echo "Color: ". $this->color ."<br>";
            echo "Ruedas: ".  $this->ruedas ."<br>";
            echo "Motor:  ". $this->motor ."<br>";
        }
    }

    $mercedez = new Coche();
    $mercedez->arrancar();
    $mercedez->girar();
    $mercedez->frenar();

    echo "Ruedas: ". $mercedez->ruedas ."<br>";
    $mercedez->caracteristicas();

