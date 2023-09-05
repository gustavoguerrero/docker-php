<?php 
require_once("Persona.php");
require_once("Operaciones.php");
    class Empleado extends Persona{
        use Operaciones;
        public function __construct(
            public string $cargo ="",
            public string $horario =""
        ) {}
        function cocinar(){
            echo $this->validarRFC();
        }
    }