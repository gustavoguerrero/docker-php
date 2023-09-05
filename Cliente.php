<?php
require_once("Persona.php");
require_once("Empleado.php");

    class Cliente extends Persona{

        public function __construct(
            public bool $esFrecuente=false,
            public string $correo=""
        ) {}

        function comer(){

        }

        function saludar(Empleado $empleado){ #type hinting: se puede enviar un objeto como arguemnto.
            echo "Felicidades Chef " ,  $empleado->nombre ;
        }
    }