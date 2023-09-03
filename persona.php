<?php
class Persona{
    public $nombre;
    public $apellido;
    public $edad;
    public $telefono;

    static $idioma;

    function hablar($tema){
        echo "Soy" , $this->nombre ," y hablo sobre $tema", $this->temaEsExtenso($tema);
    }

    function ver(){
        
    }

    function cantar(){
        
    }

    private function temaEsExtenso($tema){
        return ($tema=="politica")?"tema extenso":"tema no extenso";    
    } 
}