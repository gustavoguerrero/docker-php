<?php
    require_once("autoload.php");
    (new Autoload())->cargarRutas();

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