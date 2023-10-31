<?php

    //Tipo Escalar
    // function obtenerEdad(int $anio,int $anioActual=2023) {

    //     $edad = $anioActual - $anio;  

    //     echo "Mi edad es: $edad";

    //     return $edad; 

    // }

    // $edad = obtenerEdad("hola","hola");
    // echo "Mi edad es: $edad"; 

    //Tipo estricto

    declare(strict_types=1);

    function obtenerEdad(int $anio,int $anioActual=2023) {

        $edad = $anioActual - $anio;  

        echo "Mi edad es: $edad";

        return $edad; 

    }

    $edad = obtenerEdad("hola","hola");
    echo "Mi edad es: $edad"; 


?>