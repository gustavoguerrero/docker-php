<?php
    
    declare(strict_types=1);
    require_once("persona.php");

    $jose = new Persona();
    $jose->nombre = "Jose";
    $jose->apellido = "Lopez";
    $jose->hablar("politica");

    $sofia = new Persona();
    $sofia->nombre = "Sofia";
    $sofia->hablar("K-POP");

    /* ### FUNCIONES ###

    
    function obtenerEdad(int $anio, int $anioActual=2023){
        $edad = $anioActual - $anio;
        return $edad;
    }
    $edad = obtenerEdad(2000, 2010);
    echo "Mi edad es : $edad";

    #FUNCION ANONIMA
    $mensaje = "la suma es : ";
    $suma = function ($num1, $num2) use($mensaje){
        $resultado = $num1 + $num2;
        return "$mensaje $resultado";
    };

    #echo $suma(20, 10);
    */
    


/*
try {
    echo 'Current PHP version: ' . phpversion();
    echo '<br />';

    $host = 'db';
    $dbname = 'database';
    $user = 'user';
    $pass = 'pass';
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
    $conn = new PDO($dsn, $user, $pass);

    echo 'Database connected successfully';
    echo '<br />';
} catch (\Throwable $t) {
    echo 'Error: ' . $t->getMessage();
    echo '<br />';
}
*/