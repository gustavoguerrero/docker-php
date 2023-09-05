<?php
require_once("Persona.php");
require_once("Operaciones.php");

    class Proveedor extends Persona{
        use Operaciones;
        public function __construct(
            public string $cuenta="",
            public string $banco=""
        ) {}
        function productos(){
            echo $this->validarRFC();

        }
    }