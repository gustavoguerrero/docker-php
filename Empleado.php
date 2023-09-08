<?php 
    require_once("autoload.php");
    (new Autoload())->cargarRutas();
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