<?php
class Persona{
    public $nombre;
    public $apellido;
    public $edad;
    private $telefono;
    static $idioma;


    public function __construct(
        string $nombre = "",
        string $apellido = "",
        int $edad = 0,
        string $telefono = ""

    ){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->telefono = $telefono;
    }

    public function __get($name){
        return $this->$name;
    }

    public function __set($name, $value){
        
        switch($name){
            case "telefono":
                return $this->$name = 
                $this->validarTelefono($value);
            default:
            return $this->$name=$value;
        }
        
    }

    function hablar($tema){
        echo "Soy" , $this->nombre , " " 
            , $this->__get("telefono") ,
            " y hablo sobre $tema " , 
            $this->temaEsExtenso($tema) ;
    }

    function ver(){
        
    }

    function cantar(){
        
    }

    private function temaEsExtenso($tema){
        return ($tema=="politica")?"tema extenso":"tema no extenso";    
    } 

    private function validarTelefono($telefono){
        if(preg_match('/^[0-9]{9}$/', $telefono)){
            return $telefono;
        }else{
            return "estructura incorrecta";
        }
    }
}